<?php
// src/Controllers/HomeController.php
require_once SRC_PATH . 'services/AuthServices.php';
class AboutController
{
    public function index()
    {
        $user_session = AuthServices::fastValidationSession();
        $title_window = "Nosotros | Sharnails";
        $title_page = "Acerca de Nosotros";
        $list_css = [
            "style.css",
            "about.page.css"
        ];
        require_once VIEWS_PATH . 'pages/about.page.php';
    }
}

?>