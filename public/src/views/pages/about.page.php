<?php
require_once VIEWS_PATH . 'partials/head.php';
?>

<body>
    <?php require_once VIEWS_PATH . 'partials/header.php'; ?>
    <section class="about-main">

        <section class="poster about-section">
            <div class="about-container">

                <!-- Encabezado Principal -->
                <div class="about-header">
                    <h1>Quiénes Somos</h1>
                    <p class="subtitle">Transformando el aprendizaje digital con pasión, transparencia y mentoría real.
                    </p>
                </div>

                <!-- Bloque de Historia / Propósito -->
                <div class="about-content-grid">
                    <div class="about-text-block">
                        <h2>Nuestra Misión</h2>
                        <p>Nacimos con un objetivo claro: derribar las barreras del aprendizaje técnico y ofrecer
                            educación
                            online que realmente impacte en tu día a día. No creemos en cursos masivos y automatizados
                            donde
                            eres solo un número más; creemos en procesos guiados, con soporte real y contenido práctico.
                        </p>
                        <p>Estamos convencidos de que el éxito de un estudiante no depende de la plataforma donde
                            estudia,
                            sino del acompañamiento humano que recibe durante su camino de aprendizaje.</p>
                    </div>

                    <!-- Cuadro de Imagen / Avatar Conceptual -->
                    <div class="about-image-placeholder">
                        <div class="avatar-circle">🎯</div>
                        <h3>Mentoría con Propósito</h3>
                        <p>Un equipo humano enfocado en tu crecimiento.</p>
                    </div>
                </div>

                <hr class="divider">

                <!-- Sección de Valores Clave -->
                <div class="values-section">
                    <h2 class="section-title-center">Nuestros Pilares</h2>
                    <div class="values-grid">

                        <div class="value-card">
                            <div class="value-icon">🤝</div>
                            <h3>Atención Humana</h3>
                            <p>Por eso estás aquí. En este lanzamiento te atendemos de tú a tú por WhatsApp para guiarte
                                en
                                cada paso del proceso, asegurándonos de que tu experiencia sea perfecta.</p>
                        </div>

                        <div class="value-card">
                            <div class="value-icon">🛡️</div>
                            <h3>Transparencia Total</h3>
                            <p>Sin letras chiquitas. Te damos procesos claros, códigos de acceso únicos y un sistema de
                                canje seguro para proteger tu inversión desde el primer minuto.</p>
                        </div>

                        <div class="value-card">
                            <div class="value-icon">🚀</div>
                            <h3>Enfoque Práctico</h3>
                            <p>Diseñamos contenido directo al grano, libre de rodeos innecesarios, pensado para que
                                apliques
                                lo aprendido de inmediato en tus propios proyectos.</p>
                        </div>

                    </div>
                </div>

                <!-- Llamado a la Acción (CTA) al final -->
                <div class="about-cta">
                    <h3>¿Listo para dar el siguiente paso?</h3>
                    <p>Únete a nuestra comunidad de alumnos hoy mismo.</p>
                    <a href="/guia-inscripcion" data-destino="Guia de Inscripción" class="cta-button">Ver Pasos de Inscripción</a>
                </div>
        
            </div>
        </section>
    </section>
    <?= require_once VIEWS_PATH . 'partials/loader.php' ?>
    <?php require_once VIEWS_PATH . 'partials/footer.php'; ?>
</body>

</html>

<?php exit(); ?>