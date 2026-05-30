document.addEventListener("DOMContentLoaded", () => {
    const anchors = document.querySelectorAll('a');
    const dialog = document.getElementById('loader')
    //dialog.close()
    //dialog.showModal()
    const p = document.querySelector('.direction')
    anchors.forEach(a => {
        a.addEventListener("click", (e) => {
            const href = e.currentTarget.getAttribute('href')
            if(href[0] == '#'){
                return false
            };
            dialog.showModal();
            p.textContent = 'Ingresando a ' + e.currentTarget.dataset.destino
        })
    });
    
    window.addEventListener("pageshow", ()=>{
        dialog.close();    
    })
})