<?php
// src/Controllers/HomeController.php

class LoginController
{
    public function index()
    {
        $title_window = "Inicio | Sharnails";
        $list_css = [
            "style.css",
            "login.page.css"
        ];
        require_once '../src/views/pages/login.page.php';
    }
}

?>