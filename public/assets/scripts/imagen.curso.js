document.addEventListener("DOMContentLoaded", () => {

    const img_main = document.querySelector('.imagen-seleccionada img')
    const imgs = document.querySelectorAll('.imagen-preview')


    let index_selected = 0;
    const img_count = imgs.length;
    
    imgs.forEach(element => {
        const img_preview = element.children[0]
        element.addEventListener("click", () => SelecImg({ src: img_preview.src }))
    });

    function SelecImg({ src }) {
        img_main.src = src
    }

    function NextImg({ direccion }) {
        imgs[index_selected].children[0].classList.remove('selected')
        if (direccion === 'fwd') {
            index_selected++;
        } else if (direccion === 'bwd') {
            index_selected--
        }
        if (index_selected > img_count - 1) {
            index_selected = 0
        } else if (index_selected < 1) {
            index_selected = img_count - 1
        }
        

        const newSrc = imgs[index_selected].children[0].src
        SelecImg({ src: newSrc })
        imgs[index_selected].children[0].classList.add('selected')
    }


    const reiniciar_carrusel = () => {
        clearInterval(automatico)
        automatico = setInterval(func_automatico, 5000)
    }

    const func_automatico = () => {
        SelecImg({direccion: 'fwd'})
    }

    let automatico = setInterval(() => NextImg({ direccion: 'fwd' }), 5000);
});
