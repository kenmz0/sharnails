<?php
// src/Controllers/HomeController.php

class CursoController
{
    public function index()
    {
        $title_window = "Cursos | Sharnails";
        $title_page = "Cursos Disponibles";
        $list_css = [
            "style.css",
            "cursos.page.css"
        ];
        require_once VIEWS_PATH . 'pages/cursos.page.php';
    }

    public function softGel(){
        $title_window = "Curso de Soft Gel | Sharnails";
        $title_page = "Taller de Soft Gel";
        $id_curso = 1;
        $list_css = [
            "style.css",
            "cursos.softgel.page.css",
            "guia.page.css"
        ];
        $imagenes = [
            "/assets/img/cursos/softgel.portada.webp",
            "/assets/img/cursos/softgel.img.1.webp",
            "/assets/img/cursos/softgel.img.2.webp",
            "/assets/img/cursos/softgel.img.3.webp",
            "/assets/img/cursos/softgel.img.4.webp",
        ];
        require_once VIEWS_PATH . 'pages/cursos/softgel.curso.page.php';

    }

}

?>