<?php

require_once SRC_PATH . '/services/AuthServices.php';
class AuthMiddleware {
    private static ?AuthServices $authService = null;
    private static function initAuth() {
        if (self::$authService === null) {
            self::$authService = new AuthServices();
        }
    }
    public static function fastCheck() {
        self::initAuth();
        $session = self::$authService->fastValidationSession();
        return $session;       
    }

    private static function unauthorized($message) {
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
        header("Location: /signin?error=" . urlencode($message));
        exit;
    }

    private static function terminateSession() {
        session_unset();
        session_destroy();
    }
}