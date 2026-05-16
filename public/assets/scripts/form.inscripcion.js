// 1. Esperamos a que el DOM esté completamente cargado
document.addEventListener('DOMContentLoaded', () => {

    const formulario = document.getElementById('formulario-inscripcion');
    const modal = document.getElementById('modalExito');
    const modalMensaje = document.getElementById('modalMensaje');
    const btnWhatsApp = document.getElementById('btnEnviarWS');

    // 2. Escuchamos el evento 'submit' del formulario
    formulario.addEventListener('submit', function (e) {
        e.preventDefault(); // Evita que la página se recargue y rompa el flujo

        // 3. Recolectamos los datos del formulario automáticamente
        const formData = new FormData(this);
        formData.set("monto", 100.0)
        formData.set("nombre_curso", "Soft Gel")
        // 4. Enviamos la petición AJAX al archivo PHP
        fetch('/registro-inscripcion', {
            method: 'POST',
            body: formData
        })
            .then(response => {
                // Verificamos si el servidor respondió correctamente (status 200-299)
                if (!response.ok) {
                    throw new Error('Error en la respuesta del servidor');
                }
                return response.json(); // Parseamos la respuesta a JSON
            })
            .then(data => {
                // 5. EVALUAMOS LA RESPUESTA DEL PHP
                if (data.status === 'success') {

                    // Acción si todo salió bien en la DB:
                    // Cambiamos el texto del modal con el ID del pedido devuelto por PHP
                    modalMensaje.innerText = `Tu inscripcion al curso #${data.nombre_curso} ha sido registrado con éxito. Haz clic abajo para enviar tu comprobante.`;

                    // Inyectamos la URL de WhatsApp generada en el backend al botón del modal
                    btnWhatsApp.href = data.whatsapp_url;

                    // Mostramos el elemento <dialog> como un modal nativo
                    modal.showModal();

                    // Opcional: Limpiamos los campos del formulario para que no se duplique el envío
                    formulario.reset();

                } else {
                    // Acción si el PHP detectó un error (ej: campos vacíos, fallo en DB)
                    alert(`Atención: ${data.message}`);
                }
            })
            .catch(error => {
                // Atajamos cualquier error de red o de ejecución
                console.error('Error detectado:', error);
                alert('Hubo un problema al procesar tu solicitud. Por favor, inténtalo de nuevo.');
            });
    });

    document.getElementById("btnCerrarModal").addEventListener("click", ()=>{
        modal.close();
    })
});