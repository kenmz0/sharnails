<?php
// src/Controllers/HomeController.php

class CartController
{
    public function index()
    {
        $title_window = "Cart | Sharnails";
        $title_page = "Carrito";
        require_once VIEWS_PATH . 'pages/cursos.page.php';
    }

    public function add()
    {
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);

        $id_curso = $data['id_curso'] ?? null;

        if ($id_curso) {
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }
            if (!isset($_SESSION['cart'][$id_curso])) {
                error_log('Se aGreo');
                $_SESSION['cart'][$id_curso] = true;
                header('Content-Type: application/json');
                echo json_encode([
                    'status' => 'success',
                    'message' => 'Curso añadido corretamente.',
                    'cart_count' => array_sum($_SESSION['cart'])
                ]);
            } else {
                http_response_code(400);
                echo json_encode([
                    'status' => 'error',
                    'message' => 'ID de producto no válido',
                ]);
            }

        } else {
            http_response_code(400);
            echo json_encode([
                'status' => 'error',
                'message' => 'ID de producto no válido',
            ]);
        }
    }

}

?>