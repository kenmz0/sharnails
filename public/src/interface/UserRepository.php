<?php
require_once 'UserRepositoryInterface.php';
class UserRepository implements UserRepositoryInterface
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }


    #[Override]
    public function getUserProfile($user_id)
    {
        $stmt = $this->db->prepare(
            "SELECT
                u.id,
                u.first_name,
                u.last_name,
                CONCAT(u.first_name, ' ', COALESCE(u.last_name, '')) AS full_name,
                u.email,
                u.avatar_url,
                u.is_active,
                r.name AS role,
                u.created_at
            FROM users u
            INNER JOIN roles r ON r.id = u.role_id
            WHERE u.id = :user_id;"
        );
        $stmt->execute(['user_id' => $user_id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user ?: null;
    }
    public function findByEmail($email)
    {
        $stmt = $this->db->prepare("SELECT email FROM users WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user ?: null;
    }


    public function getCredentials($email)
    {
        $stmt = $this->db->prepare("SELECT id, email, password_hash FROM users WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user ?: null;
    }

    public function create($userData): bool
    {
        $stmt = $this->db->prepare("INSERT INTO users (first_name, last_name, email, password_hash, role_id) VALUES (:first_name, :last_name, :email, :password_hash, :role_id)");
        return $stmt->execute([
            'first_name' => $userData['first_name'],
            'last_name' => $userData['last_name'],
            'email' => $userData['email'],
            'password_hash' => $userData['password'],
            'role_id' => $userData['role_id']
        ]);
    }


    public function createSession($sessionData)
    {
        $stmt = $this->db->prepare("INSERT INTO sessions (user_id, expires_at, ip_address, user_agent) VALUES (:user_id, :expires_at, :ip_address, :user_agent) RETURNING id");
        $stmt->execute([
            'user_id' => $sessionData['user_id'],
            'expires_at' => $sessionData['expires_at'],
            'ip_address' => $sessionData['ip_address'],
            'user_agent' => $sessionData['user_agent']
        ]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function getSessionById($sessionId)
    {
        $stmt = $this->db->prepare("SELECT user_id, user_agent FROM sessions WHERE id = :session_id AND revoked_at IS NULL");
        error_log("Ejecutando getSessionById con sessionId: " . $sessionId);
        $stmt->execute(['session_id' => $sessionId]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        error_log("Resultado de getSessionById: " . print_r($result, true));
        return $result;
    }

    public function revokeSession($sessionId)
    {
        $stmt = $this->db->prepare("UPDATE sessions SET revoked_at = NOW() WHERE id = :session_id");
        return $stmt->execute(['session_id' => $sessionId]);
    }
}
?>