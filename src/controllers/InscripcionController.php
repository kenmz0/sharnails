<?php
// src/Controllers/HomeController.php

class InscripcionController
{
    public function canjear()
    {
        $title_window = "Canjear Código | Sharnails";
        $title_page = "Canjeo de Código";
        $list_css = [
            "style.css",
            "canjear.page.css"
        ];
        require_once '../src/views/pages/canjear.page.php';
    }

    public function guide(){
        $title_window = "Guia de Inscripcion | Sharnails";
        $title_page = "Guia de Inscripcion y Acceso";
        $list_css = [
            "style.css",
            "guia.page.css"
        ];
        require_once '../src/views/pages/guia.page.php';
    }

    public function registrarInscripcion()
    {
        header('Content-Type: application/json; charset=utf-8');

        // Verificar que la petición sea por POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Sanitizar los datos recibidos del formulario
            $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
            $nombre_curso = filter_input(INPUT_POST, 'nombre_curso', FILTER_SANITIZE_SPECIAL_CHARS);

            // Validación básica
            if (empty($nombre) || empty($email) || empty($nombre_curso)) {
                error_log($nombre);
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Por favor, completa todos los campos.'
                ]);
                exit;
            }

            /* 
               AQUÍ IRÍA TU CÓDIGO REAL DE BASE DE DATOS
               Ejemplo: $stmt = $pdo->prepare("INSERT INTO pagos...");
            */

            // Simulamos que todo salió bien y generamos un ID de pedido aleatorio

            // Creamos el mensaje personalizado para WhatsApp
            $mensaje_ws = "Hola, acabo de registrar mi inscripcion.\n";
            $mensaje_ws .= "Nombre: " . $nombre . "\n";
            $mensaje_ws .= "Correo: " . $email . "\n";
            $mensaje_ws .= "Curso: " . $nombre_curso . "\n";

            // Codificamos el mensaje para que sea una URL válida
            $mensaje_codificado = rawurlencode($mensaje_ws);
            $link_whatsapp = "https://wa.me/593963012211?text=" . $mensaje_codificado;

            // Enviamos la respuesta de éxito al frontend junto con el link generado
            echo json_encode([
                'status' => 'success',
                'message' => 'Registro guardado exitosamente.',
                'whatsapp_url' => $link_whatsapp
            ]);

        } else {
            // Si intentan entrar directo al archivo por GET
            echo json_encode(['status' => 'error', 'message' => 'Método no permitido.']);
        }
    }


}

?>