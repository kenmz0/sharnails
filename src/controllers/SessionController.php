<?php
// src/Controllers/HomeController.php
require_once SRC_PATH . 'services/AuthServices.php';
require_once SRC_PATH . 'services/UserServices.php';
class SessionController
{
    private AuthServices $authService;
    private UserServices $userServices;

    public function __construct()
    {
        $this->userServices = new UserServices();
        $this->authService = new AuthServices();
    }
    public function signin()
    {
        if (isset($_GET['error'])) {
            $error_message = $_GET['error'];
        } else {
            if ($this->authService->deepValidationSession()) {
                header('Location: /dashboard');
                exit();
            }
        }
        //Todo: con error_message mostrar un mensaje de error en la vista
        $title_window = "Sign In | Sharnails";
        $title_page = "Inicio de Sesión";
        $user_session = false;
        $list_css = [
            "style.css",
            "signin.page.css"
        ];
        require_once VIEWS_PATH . 'pages/signin.page.php';
    }

    public function signup()
    {
        if (isset($_GET['error'])) {
            $error_message = $_GET['error'];
        } else {
            if ($this->authService->deepValidationSession()) {
                header('Location: /dashboard');
                exit();
            }
        }
        $user_session = false;
        $title_window = "Registrate | Sharnails";
        $title_page = "Registro de Cuenta";
        $list_css = [
            "style.css",
            "signup.page.css"
        ];
        require_once VIEWS_PATH . 'pages/signup.page.php';
    }

    public function dashboard()
    {
        $authentication = AuthServices::deepValidationSession();
        $user_session = $authentication['authentication'];
        if (!$user_session) {
            header('Location: /signin?error=Debes iniciar sesión para acceder a tu perfil');
            exit();
        }
        $user_id = $authentication['user_id'];
        $userdata = $this->userServices->getUserData($user_id);
        $antiguedad = new DateTime($userdata['created_at']);
        $formatter = new IntlDateFormatter(
            'es_ES',
            IntlDateFormatter::LONG,
            IntlDateFormatter::NONE,
            null,
            null,
            "LLLL YYYY" // Patrón para: "mes año" (ej: mayo 2023)
        );
        $title_window = "Mi Cuenta | Sharnails";
        $title_page = "Dashboard";
        $informacion_usuario = [
            'nombre' => $userdata['full_name'],
            'email' => $userdata['email'],
            'antiguedad' => 'Miembro desde ' . $formatter->format($antiguedad)
        ];
        $list_css = [
            "style.css",
            "perfil.page.css"
        ];
        require_once VIEWS_PATH . 'pages/dashboard.page.php';
    }
}

?>