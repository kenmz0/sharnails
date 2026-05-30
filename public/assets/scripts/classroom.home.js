document.addEventListener("DOMContentLoaded", () => {
    const btn_menu = document.getElementById("btn_menu");
    const classroom_menu = document.getElementById("classroom_menu");
    const backdrop = document.querySelector('.backdrop');

    btn_menu.addEventListener("click", (e) => {
        classroom_menu.classList.toggle("active");
        e.target.classList.toggle("active");
        backdrop.classList.toggle("active");
    });

    backdrop.addEventListener("click", (e) => {
        classroom_menu.classList.toggle("active");
        btn_menu.classList.toggle("active");
        e.currentTarget.classList.toggle("active")
    })

    backdrop.addEventListener("touchstart", (e) => {
        classroom_menu.classList.toggle("active");
        btn_menu.classList.toggle("active");
        e.currentTarget.classList.toggle("active")
    })

    const btn_titulos_bloque = document.querySelectorAll('.titulo-bloque');
    btn_titulos_bloque.forEach(btn => {
        btn.addEventListener("click", (e) => {
            e.currentTarget.classList.toggle('expanded')
            const bloque_contenido = document.querySelector('#bloque_contenido_' + e.currentTarget.dataset.bloque);
            console.log(bloque_contenido);

            bloque_contenido.classList.toggle('expanded');
        })
    });


    const btn_bloques = document.querySelectorAll('.contenido-titulo');
    btn_bloques.forEach(btn => {
        btn.addEventListener("click", (e) => {
            const numero_contenido = e.currentTarget.dataset.contenido;
            const pizarra_contenido = document.querySelector('#pizarra_contenido_' + numero_contenido);
            pizarra_contenido.classList.toggle('expanded');
        })
    });

    const dialog_pizarra = document.getElementById("dialog_pizarra");
    const cerrarModal = document.getElementById("cerrarModal");

    const btnfullscreen = document.querySelectorAll(".btn-fullscreen");
    btnfullscreen.forEach(btn => {
        btn.addEventListener("click", () => {
            console.log(dialog_pizarra.open);

            if (dialog_pizarra.open) {
                dialog_pizarra.close();
                return
            }
            const numero_contenido = btn.dataset.contenido;
            const pizarra_contenido = document.querySelector('#pizarra_contenido_' + numero_contenido);
            const dialog_content = document.getElementById("dialog_content");
            dialog_content.innerHTML = pizarra_contenido.cloneNode(true).outerHTML;
            dialog_pizarra.showModal()
        });
    });

    cerrarModal.addEventListener("click", () => {
        dialog_pizarra.close();
    });

})