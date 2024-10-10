// MENU EXPANDIBLE

document.addEventListener("DOMContentLoaded", function () {
    // Seleccionamos todas las cartas con collapse
    const menuCards = document.querySelectorAll('.menu-card');

    menuCards.forEach(card => {
        card.addEventListener('click', function () {
            const plusIcon = this.querySelector('.plus-icon');
            const collapseElement = document.querySelector(this.getAttribute('data-bs-target'));

            // Cambiar el símbolo cuando el collapse está visible o no con animación
            collapseElement.addEventListener('shown.bs.collapse', function () {
                plusIcon.style.transition = "transform 0.2s ease, opacity 0.2s ease";
                plusIcon.style.transform = "scale(0)";
                plusIcon.style.opacity = "0";

                setTimeout(() => {
                    plusIcon.textContent = '-';
                    plusIcon.style.transform = "scale(1)";
                    plusIcon.style.opacity = "1";
                }, 300);
            });

            collapseElement.addEventListener('hidden.bs.collapse', function () {
                plusIcon.style.transition = "transform 0.2s ease, opacity 0.2s ease";
                plusIcon.style.transform = "scale(0)";
                plusIcon.style.opacity = "0";

                setTimeout(() => {
                    plusIcon.textContent = '+';
                    plusIcon.style.transform = "scale(1)";
                    plusIcon.style.opacity = "1";
                }, 300);
            });
        });
    });
});


// CAMBIO DE COLOR DEL HEADER

window.addEventListener('scroll', function () {
    var navbar = document.querySelector('.navbar');
    var logo = document.querySelector('#logo');
    var buttons = document.querySelectorAll('.btn-nav'); // Selecciona todos los botones .btn-nav
    var portadaHeight = document.querySelector('.portadaHome').offsetHeight; // Altura dinámica de la portada
    var scrollPosition = window.scrollY || document.documentElement.scrollTop;

    if (scrollPosition > portadaHeight) {
        navbar.classList.add('navbar-scrolled', 'navbar-expanded');
        navbar.classList.remove('container'); // Elimina la clase container

        // Cambiar el logo al de color azul
        logo.src = './public/img/logoBlue.svg';
    } else {
        navbar.classList.remove('navbar-scrolled', 'navbar-expanded');
        navbar.classList.add('container'); // Vuelve a agregar la clase container

        // Volver al logo original
        logo.src = './public/img/logo.svg';
    }
});