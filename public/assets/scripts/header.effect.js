const height_1 = getComputedStyle(document.documentElement).getPropertyValue('--height-header');
const height_2 = getComputedStyle(document.documentElement).getPropertyValue('--height-header-2');

const is_mobile = window.innerWidth <= 400 || window.innerHeight <= 400;
const backgroundColor = is_mobile ? ['#000', '#000'] : ['#000', 'transparent'];
let ajusted_header_size = is_mobile
    ? [height_2, height_2]
    : [height_1, height_2];

document.addEventListener("DOMContentLoaded", () => {
    const el_header = document.querySelector('.header');
    /*     if (is_mobile) {
            el_header.style.position = 'fixed';
        } */
    const header_logo = document.querySelector('.header .img-logo');
    const header_title = document.querySelector('.header .title-page');
    document.addEventListener("scroll", () => {
        const scrollY = this.scrollY;
        let limit_top = 50;
        let limit_bottom = 160;
        if (scrollY >= limit_top) {
            header_logo.style.opacity = 1
            header_title.style.opacity = 0;
            el_header.style.background = backgroundColor[0];
            el_header.style.height = ajusted_header_size[1];
            return
        }
        if (scrollY < limit_bottom) {
            header_logo.style.opacity = 0
            header_title.style.opacity = 1;
            el_header.style.background = backgroundColor[1]
            el_header.style.height = ajusted_header_size[0];
        }
    })


    const button_menu_navegavion = document.querySelector('.button-menu-navegavion');
    const backdrop = document.querySelector('.header-backdrop');
    const nav_item = document.querySelector('.nav-item');
    button_menu_navegavion.addEventListener('click', () => {
        nav_item.classList.toggle('showed');
        backdrop.classList.toggle('showed')
    })

    backdrop.addEventListener("click", () => {
        nav_item.classList.toggle('showed');
        backdrop.classList.toggle('showed')
        console.log("click");
        
    })
    backdrop.addEventListener("touchstart", () => {
        nav_item.classList.toggle('showed');
        backdrop.classList.toggle('showed')
        console.log("mousedown");
    })
})