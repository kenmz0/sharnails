document.addEventListener("DOMContentLoaded", () => {
    const el_header = document.querySelector('.header');
    const header_logo = document.querySelector('.header .img-logo');
    const header_title = document.querySelector('.header .title-page');
    document.addEventListener("scroll", () => {
        const scrollY = this.scrollY;
        const new_height = el_header.offsetHeight;
        let limit_top = 80;
        let limit_bottom = 60;
/*         console.log(scrollY, limit_top, limit_bottom)
        if(new_height > 100){
            limit_top = 80
            limit_bottom = 140;
        } */
        if (scrollY < limit_bottom) {
            
            header_logo.style.opacity = 0
            header_title.style.opacity = 1;
            el_header.style.background = 'transparent'
            el_header.style.height = 'var(--height-header)';
        }
        if (scrollY > limit_top) {

            header_logo.style.opacity = 1
            header_title.style.opacity = 0;
            el_header.style.background = '#000';
            el_header.style.height = 'var(--height-header-2)';
        }
    })    
})