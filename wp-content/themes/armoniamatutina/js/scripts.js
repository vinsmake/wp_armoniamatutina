function armonia_matutina_script() {
    console.log('scripts working');

    /* hamburguer menu */
    const hamburguer = document.querySelector('.hamburger');
    hamburguer.addEventListener('click', function () {
        const menuPrincipal = document.querySelector('.header__navbar__active');
        if (menuPrincipal.style.transform === 'translateX(101%)' || menuPrincipal.style.transform === '') {
            menuPrincipal.style.transform = 'translateX(0%)';
        } else {
            menuPrincipal.style.transform = 'translateX(101%)';
        }
    });
}

document.addEventListener('DOMContentLoaded', armonia_matutina_script);
