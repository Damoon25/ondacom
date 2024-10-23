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

// CAROUSEL

const swiper = new Swiper('.swiper-container', {
    loop: true, // Hacer que el carrusel esté en bucle
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    slidesPerView: 3, // Mostrar 3 slides a la vez en pantallas grandes
    spaceBetween: 30, // Espacio entre los slides
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    breakpoints: {
        // Configuración responsiva para pantallas más pequeñas
        375: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    }
});

// INPUT PDF

document.getElementById('curriculo').addEventListener('change', function () {
    var fileName = this.files.length > 0 ? this.files[0].name : 'Nenhum arquivo selecionado';
    document.getElementById('fileName').textContent = fileName;
});

// MENU DESPLEGABLE MOBILE

document.addEventListener("DOMContentLoaded", function() {
    var offcanvasLinks = document.querySelectorAll('.offcanvas-body a');
    var offcanvas = document.getElementById('offcanvasExample');

    offcanvasLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault(); // Evita que el navegador siga el enlace de ancla
            var target = document.querySelector(this.getAttribute('href')); // Selecciona la sección
            var offcanvasInstance = bootstrap.Offcanvas.getInstance(offcanvas);
            offcanvasInstance.hide();

            // Retrasar el scroll hasta que se cierre el offcanvas
            setTimeout(function() {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }, 300); // Ajusta el tiempo de espera según el tiempo de cierre del offcanvas
        });
    });
});
