<?php
require_once SRC_PATH . '/database/Database.php';
require_once SRC_PATH . '/interface/UserRepository.php';
require_once SRC_PATH . '/interface/RoleRepository.php';
require_once SRC_PATH . '/helpers/JwtHelper.php';

class AuthServices
{
    private static ?UserRepositoryInterface $userRepository = null;

    private static function initUserRepository()
    {
        if (self::$userRepository === null) {
            self::$userRepository = new UserRepository(Database::getConnection());
        }
    }
    private static ?RoleRepositoryInterface $roleRepository = null;
    public function __construct()
    {
        $db = Database::getConnection();
        self::$userRepository = new UserRepository($db);
        self::$roleRepository = new RoleRepository($db);
    }



    public function register($userData): bool
    {
        if (!$this->validateUserData($userData)) {
            return false;
        }

        if ($this->userRepository->findByEmail($userData['email'])) {
            return false;
        }

        $userData['password'] = password_hash($userData['password'], PASSWORD_BCRYPT);
        $role = $this->roleRepository->findByCode('USER');

        if ($role) {
            $userData['role_id'] = $role['id'];
        } else {
            throw new Exception('Role not found');
        }

        return $this->userRepository->create($userData);
    }

    public function loginValidation($email, $password): array|bool
    {
        self::initUserRepository();
        $user = self::$userRepository->getCredentials($email);
        if (!$user) {
            return false; // Usuario no encontrado
        }

        $user_verified = password_verify($password, $user['password_hash']);
        if (!$user_verified) {
            return false; //Contraseña incorrecta
        }
        return [
            "id" => $user['id'],
            "email" => $user['email']
        ];
    }

    private function validateUserData($userData): bool
    {
        // Implementar validaciones necesarias (ej. formato de email, longitud de contraseña, etc.)
        if (!filter_var($userData['email'], FILTER_VALIDATE_EMAIL)) {
            return false; // Email no válido
        }
        if (strlen($userData['password']) < 6) {
            return false; // Contraseña demasiado corta
        }
        return true;
    }

    public function createSession($user_id): bool
    {
        $expire_seconds = time() + (3600 * 24 * 3); //3 dias     
        $expires_at = date('c', $expire_seconds);
        $sessionData = [
            'user_id' => $user_id,
            'expires_at' => $expires_at,
            'ip_address' => $_SERVER['REMOTE_ADDR'],
            'user_agent' => $_SERVER['HTTP_USER_AGENT']
        ];
        $session = self::$userRepository->createSession($sessionData);
        if (!$session) {
            return false; // Error al crear sesión en la DB
        }
        error_log("Sesión creada con ID: " . $session['id']);
        $jwt = JwtHelper::create($session['id'], $expires_at);
        try {
            setcookie("session_token", $jwt, [
                'expires' => $expire_seconds,
                'path' => '/',
                'domain' => null, // Cambiar a tu dominio si es necesario
                'secure' => false, // Cambiar a false si estás probando en localhost sin SSL
                'httponly' => true,
                'samesite' => 'Lax'
            ]);
            //code...
        } catch (\Throwable $th) {
            error_log("Error al establecer cookie de sesión: " . $th->getMessage());
        }

        return true;
    }

    public static function deepValidationSession(): array
    {
        $user_authenticated = self::fastValidationSession();
        if (!$user_authenticated) {
            return [
            "authentication" => false,
            "user_id" => null
        ];
        }
        $token = $_COOKIE['session_token'] ?? null;
        if (!isset($token)) {
            error_log("No se encontró token de sesión en la cookie.");
            return [
            "authentication" => false,
            "user_id" => null
        ];;
        }
        $payload = JwtHelper::validate($token);
        if (!$payload) {
            error_log("Token de sesión no valido o null.");
            setcookie("session_token", "", time() - 3600, "/");
            self::unauthorized("Token inválido o expirado.");
            return [
            "authentication" => false,
            "user_id" => null
        ];;
        }
        $session_id = $payload['sid'];
        self::initUserRepository();
        $session_status = self::$userRepository->getSessionById($session_id);
        if (!$session_status) {
            error_log("Sesión no encontrada o revocada.");
            error_log(print_r($session_status, true));
            setcookie("session_token", "", time() - 3600, "/");
            self::unauthorized("Sesión no encontrada o revocada.");
            return [
            "authentication" => false,
            "user_id" => null
        ];
        }

        return [
            "authentication" => true,
            "user_id" => $session_status['user_id']
        ];
    }


    public static function fastValidationSession()
    {
        $user_authenticated = false;
        $token = $_COOKIE['session_token'] ?? null;
        if (isset($token)) {
            $payload = JwtHelper::validate($token);
            Error_log("Payload del token: " . print_r($payload, true));
            if (!$payload) {
                setcookie("session_token", "", time() - 3600, "/");
                $user_authenticated = false;
            } else {
                $expires_at = $payload['exp'] ?? 0;
                if ($expires_at < time()) {
                    setcookie("session_token", "", time() - 3600, "/");
                    $user_authenticated = false;
                }
                $user_authenticated = true;
            }
        }
        return $user_authenticated;
    }

    private static function unauthorized($message)
    {
        // Detectamos si la petición es un Fetch/AJAX (JSON)
        $isAjax = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) ||
            (isset($_SERVER['HTTP_ACCEPT']) && str_contains($_SERVER['HTTP_ACCEPT'], 'application/json'));

        if ($isAjax) {
            header('Content-Type: application/json');
            http_response_code(401);
            echo json_encode(['status' => 'error', 'message' => $message]);
            exit;
        }

        // Si es una navegación normal
        header('Location: /signin?error=' . urlencode($message));
        exit;
    }
    public static function terminateSession()
    {
        $token = $_COOKIE['session_token'] ?? null;
        if (!$token) {
            throw new Exception("No se encontró token de sesión");
        }

        $payload = JwtHelper::validate($token);
        if (!$payload) {
            throw new Exception("Token inválido o expirado");
        }
        $sessionId = $payload['sid'] ?? null;
        if (!$sessionId) {
            throw new Exception("ID de sesión no encontrado en el token");
        }

        // Revocar la sesión en la base de datos
        $revoked = self::revokeSession($sessionId);
        if (!$revoked) {
            throw new Exception("Error al revocar la sesión");
        }

        // Limpiar la cookie
        setcookie("session_token", "", time() - 3600, "/");
    
    }

    private static function revokeSession($sessionId): bool
    {
        self::initUserRepository();
        return self::$userRepository->revokeSession($sessionId);
    }
}
?>