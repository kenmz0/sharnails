<?php
// src/Controllers/HomeController.php
require_once SRC_PATH . 'services/AuthServices.php';
class ClassroomController
{
    private $softgel_contenido = [
        "Bienvenida “Taller de Soft Gel”",
        "Anatomía de la uña natural",
        "Información complementaria sobre la uña natural",
        "Pasos previos a la Manicura Combinada, reconocimiento del tipo de piel a trabajar",
        "Pasos previos a la Manicura Combinada, identificar el tipo de uña natural y analizar el procedimiento a seguir.",
        "Características de los tips para Soft Gel",
        "Ventajas y Desventajas del Sistema Soft Gel",
        "Como elegir el tip correcto en base a cada uña natural",
        "¿Se puede realizar o no Mantenimiento al Sistema Soft Gel?",
        "Retiro del Sistema Soft Gel",
        "Materiales y herramientas necesarias para realizar el Sistema Soft Gel",
        "Procedimiento teórico de la manicura",
        "Manicura, preparación",
        "Como medir el tip de Soft Gel correctamente y cuáles son los errores más comunes al aplicarlo",
        "Preparación y adaptación del tip de Soft Gel ",
        "Aplicación del Tip Soft Gel en uña convexa",
        "Aplicación del Tip Soft Gel en uña cóncava ",
        "Relleno y Nivelación con Base ",
        "Como lograr que no se transparente la uña natural para los esmaltados ",
        "Esmaltado perfecto",
        "Babyglam con difuminado en punta ",
        "Encapsulado total del sistema (forma #1)",
        "Encapsulado total del sistema (forma #2)",
        "Babygltter con encapsulado en punta ",
        "Acabados finales",
        "Técnica de decoración: Flor en relieve",
        "Técnica de decoración: Francés con difuminado",
        "Técnica de decoración: Relieve ",
        "Técnica de decoración: Efecto concha ",
        "Técnica de decoración: Francés Encapsulado",
        "Técnica de decoración: Francés Encapsulado",
        "Video de Cierre"
    ];
    public function SoftGelHome()
    {
        $authentication = AuthServices::deepValidationSession();
        $user_session = $authentication['authentication'];
        $curso_name = "Soft Gel";
        //?Bloque de repositorio
        $index_acceso_user = 1;
        $bloque_name = $this->softgel_contenido[$index_acceso_user];
        $url_video = 'https://www.youtube.com/embed/O52u0imiqNY';
        $modalidad = "Taller";
        $title_page = 'Classroom';
        //?FIN Bloque de repositorio
        $title_window = "{$modalidad} {$curso_name} | Sharnails";
        $curso_url = "classroom/soft-gel";
        $list_css = [
            "style.css",
            "classroom.css",
            "classroom.home.css"
        ];
        require_once VIEWS_PATH . 'pages/classroom.page.php';
    }

    public function renderNextRecurso()
    {
        if (!isset($_SERVER['HTTP_HX_REQUEST'])) {
            exit('Acceso no autorizado');
        }
        //?Bloque de repositorio
        //!debo validar que ya peude acceder a otro contenido 
        $url_video = 'https://www.youtube.com/embed/pONmJiKK_WI';
        $recurso_nombre = 'Segundo Video';
        $tiempo_visto = 12;
        $tiempo_total = 110;
        $tiempo_restante = $tiempo_total - $tiempo_visto;
        $matricula_expira = 10;
        $bloque = 15;
        $total_bloques = 30;
        $porcentaje = $bloque * 100 / $total_bloques;
        //?FIN Bloque de repositorio

        if ($url_video) {
            echo '<iframe 
                    width="100%" 
                    height="100%" 
                    src="' . $url_video . '" 
                    title="Pato caminando" 
                    frameborder="0" 
                    allow="accelerometer; 
                        autoplay; 
                        clipboard-write; 
                        encrypted-media; 
                        gyroscope; 
                        picture-in-picture; 
                        web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" 
                    allowfullscreen>
                </iframe>';

            echo '<h2 id="nombre_bloque" class="nombre-bloque" hx-swap-oob="true">' . $recurso_nombre . '</h2>';
            echo '<span id="tiempo_expiracion_txt" hx-swap-oob="true">Matricula expira en ' . $matricula_expira . ' dias</span>';
            echo '<span id="tiempo_restante_txt" hx-swap-oob="true">' . $tiempo_restante . ' horas más para completar el curso</span>';
            echo '<span id="porcentaje_txt" hx-swap-oob="true">' . $porcentaje . '% completado</span>';
            echo '<div class="bar-progress" style="width: ' . $porcentaje . '%;" id="el_progressbar" hx-swap-oob="true"></div>';
        } else {
            echo 'Acceso al recurso no autorizado';
        }

    }
}

?>