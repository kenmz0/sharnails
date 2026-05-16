<?php
// src/Controllers/HomeController.php

class AboutController
{
    public function index()
    {
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