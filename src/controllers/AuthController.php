<?php
require_once SRC_PATH . '/services/AuthServices.php';
require_once SRC_PATH . '/helpers/JwtHelper.php';
class AuthController
{
    private AuthServices $authService;

    public function __construct()
    {
        $this->authService = new AuthServices();
        }

    public function signup()
    {
        if (!isset($_POST['first_name']) || !isset($_POST['email']) || !isset($_POST['password'])) {
            $response['message'] = 'Datos incompletos controller';
            header('Content-Type: application/json');
            echo json_encode($response);
            return;
        }
        $userData = [
            'first_name' => htmlspecialchars(trim($_POST['first_name'])),
            'last_name' => htmlspecialchars(trim($_POST['last_name'])),
            'email' => htmlspecialchars(trim($_POST['email'])),
            'phone_number' => htmlspecialchars(trim($_POST['phone_number'])),
            'password' => htmlspecialchars(trim($_POST['password'])),
            'confirm_password' => htmlspecialchars(trim($_POST['confirm_password']))
        ];

        try {
            $user = $this->authService->register($userData);

            echo json_encode([
                'success' => true,
                'user' => $user
            ]);
        } catch (Exception $e) {
            http_response_code(400);

            echo json_encode([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    public function signin()
    {
        if (!isset($_POST['email']) || !isset($_POST['password'])) {
            $response['message'] = 'Datos incompletos controller';
            header('Content-Type: application/json');
            echo json_encode($response);
            return;
        }
        $userLoginData = [
            'email' => htmlspecialchars(trim($_POST['email'])),
            'password' => htmlspecialchars(trim($_POST['password'])),
        ];

        try {
            $user = $this->authService->loginValidation($userLoginData['email'], $userLoginData['password']);
            if (!$user) {
                throw new Exception("Credenciales inválidas");
            }
            $session = $this->authService->createSession($user['id']);
            if (!$session) {
                throw new Exception("Error al crear la sesión");
            }

            header('Content-Type: application/json');
            echo json_encode([
                'success' => true,
                'msg' => 'Inicio de sesión exitoso',
                'redirectUrl' => '/dashboard'
            ]);
            exit();
        } catch (Exception $e) {
            header('Content-Type: application/json');
            http_response_code(400);
            echo json_encode([
                'success' => false,
                'message' => $e->getMessage()
            ]);
            exit();
        }

    }

    public function signout()
    {
        try {
            $this->authService::terminateSession();
            $mensaje = urldecode('Sesión cerrada');
            header('Location: /?msg=$mensaje');
            exit();
        } catch (Exception $e) {
            setcookie("session_token", "", time() - 3600, "/");
            error_log('Session cerrada force mode');
            $mensaje = urldecode('Sesión cerrada');
            header('Location: /?msg=$mensaje');
            exit();
        }
    }

}
?>