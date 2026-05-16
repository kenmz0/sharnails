<?php
// src/Controllers/HomeController.php

class HomeController
{
    public function index()
    {
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