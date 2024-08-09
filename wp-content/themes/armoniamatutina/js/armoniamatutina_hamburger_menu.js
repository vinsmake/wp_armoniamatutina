function armoniamatutina_hamburger_menu() {
    console.log('scripts working');

    /* hamburguer menu */
    const hamburguer = document.querySelector('.hamburger');
    const menuPrincipal = document.querySelector('.header__navbar__active');

    /* Ajustar la ruta de iconos segun estructura */
    const hamburgerPath = '/wp-content/themes/armoniamatutina/svg/hamburger.svg';
    const closePath = '/wp-content/themes/armoniamatutina/svg/close.svg';
    
    // Función para cargar un nuevo SVG
    function loadSVG(path) {
        fetch(path)
            .then(response => response.text())
            .then(data => {
                hamburguer.innerHTML = data;
            })
            .catch(error => console.error('Error loading SVG:', error));
    }

    // Inicializar con el icono de hamburguesa
    loadSVG(hamburgerPath);

    /* open close translate logic */
    menuPrincipal.style.transform = 'translateX(101%)';
    hamburguer.addEventListener('click', function () {
        if (menuPrincipal.style.transform === 'translateX(101%)' || menuPrincipal.style.transform === '') {
            menuPrincipal.style.transform = 'translateX(0%)';
            loadSVG(closePath);
        } else {
            menuPrincipal.style.transform = 'translateX(101%)';
            loadSVG(hamburgerPath);
        }
    });
}

document.addEventListener('DOMContentLoaded', armoniamatutina_hamburger_menu);
