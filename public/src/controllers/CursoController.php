<?php
// src/Controllers/HomeController.php
require_once SRC_PATH . 'services/AuthServices.php';
require_once SRC_PATH . 'services/CursoServices.php';
class CursoController
{

    public function index()
    {
        $user_session = AuthServices::fastValidationSession();
        $curso_list = CursoServices::getCursos();
        $cloud_name = getenv('CLOUD_NAME_CLOUDINARY');
        $url_template = "https://res.cloudinary.com/" . $cloud_name . "/image/upload/f_auto,q_auto/v1/";
        $error_msg = "";
        if ($curso_list && count($curso_list)) {
            $error_msg = "Lo sentimos, no se han podido cargar la lisa de cursos. Intente más tarde.";
        }
        $title_window = "Cursos | Sharnails";
        $title_page = "Cursos Disponibles";
        $list_css = [
            "style.css",
            "cursos.page.css"
        ];
        require_once VIEWS_PATH . 'pages/cursos.page.php';
    }

    public function curso($slug)
    {
        $user_session = AuthServices::fastValidationSession();
        $clean_slug = trim((urldecode($slug)), '{}');
        $curso_info = CursoServices::getCursoBySlug($clean_slug);
        $title_window = "" . $curso_info['modalidad'] . " " . $curso_info['name'];
        $title_page = "" . $curso_info['modalidad'] . " de " . $curso_info['name'];
        $list_css = [
            "style.css",
            "cursos.softgel.page.css",
            "guia.page.css"
        ];
        $cloud_name = getenv('CLOUD_NAME_CLOUDINARY');
        $url_gallery = "https://res.cloudinary.com/" . $cloud_name . "/image/list/" . $curso_info['gallery_cloudinary'] . ".json";
        $response = file_get_contents($url_gallery);
        $galeria = [["public_id" => $curso_info['cover_url']]];
        if ($response) {
            $data = json_decode($response, true);
            $galeria = array_merge($galeria, $data['resources']);
        }
        $url_template = "https://res.cloudinary.com/" . $cloud_name . "/image/upload/f_auto,q_auto/v1/";
        require_once VIEWS_PATH . 'pages/curso.page.php';

    }

}

?>