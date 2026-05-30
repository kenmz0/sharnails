<?php
require_once SRC_PATH . 'services/AuthServices.php';
class HomeController
{
    public function index()
    {
        $user_session = AuthServices::fastValidationSession(); // Simulación de estado de sesión del usuario
        $title_window = "Inicio | Sharnails";
        $title_page = "Inicio";
        $list_css = [
            "style.css",
            "home.page.css"
        ];
        require_once VIEWS_PATH . 'pages/home.page.php';
    }
}

?>