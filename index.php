<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("template/meta.php") ?>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/css/uikit.min.css" />
    <title>Ondacom | Home</title>
</head>

<body>

    <main>
        <div class="portadaHome">
            <?php include("template/header.php") ?>
            <div id="home">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 align-self-center">
                            <div class="mb-3 mt-3">
                                <div class="col-sm-6 col-md-12 mt-3" style="padding-top: 20% !important;">
                                    <p class="text-center text-md-start animate__fadeInLeft animate__animated animate__faster animate__slower textPrincipalHome">
                                        Criando <br>
                                        Conectividade
                                    </p>
                                </div>
                                <div class="col-sm-12 col-md-12 mt-3 d-flex justify-content-center text-center justify-content-md-start text-md-start mb-5">
                                    <a href="#section1"><img src="./public/img/Buttons/verMais1.svg" alt="Ver Mais"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="paddingTop paddingBottom">
            <div class="container">
                <div class="col-12 text-center">
                    <h2 class="titleSection" style="color: var(--color1) !important;">
                        Líderes em operação e construção <br>
                        de redes de <span class="highlight">Telecomunicações</span>
                    </h2>
                </div>
                <div class="col-8 mb-md-4 text-center mx-auto">
                    <p class="text1 animate__animated animate__backInRight animate__delay-0s animate__fast">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat.
                    </p>
                </div>
            </div>
        </div>
        <div class="portadaSection2"></div>
        <div id="section3" class="paddingTop paddingBottom">
            <div class="container">
                <div class="col-12 text-center">
                    <h2 class="titleSection" style="color: var(--link) !important;">
                        Consectetur <span class="highlight3">adipiscing</span>
                    </h2>
                </div>
                <div class="col-8 mb-md-4 text-center mx-auto" style="color: var(---link) !important;">
                    <p class="text1 animate__animated animate__backInRight animate__delay-0s animate__fast">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
                <div class="col-sm-12 position-relative">
                    <div class="container">
                        <div class="row position-relative">
                            <div id="node1" class="col-md-2 d-flex justify-content-center align-items-center"></div>
                            <div id="node2" class="col-md-2 d-flex justify-content-center align-self-start"></div>
                            <div id="node3" class="col-md-2 d-flex justify-content-center align-items-center"></div>
                            <div class="col-md-3 d-flex flex-column">
                                <div id="node4" class="mb-5"></div>
                                <div id="node5" class="mb-5"></div>
                                <div id="node6"></div>
                            </div>
                            <div class="col-md-3">
                                <div id="info-panel" class="info-panel">
                                    <h2>Hover sobre un nodo</h2>
                                    <p>El contenido aparecerá aquí...</p>
                                </div>
                            </div>
                        </div>

                        <!-- Contenedor SVG para las líneas -->
                        <svg id="lines"></svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 pb-4 pt-4">
            <div class="paddingBottom paddingTop col-md-12">
                <div class="container">
                    <div class="portadaWhatWe1">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 align-self-md-center justify-content-md-end">
                                <h2 class="titleSection titleWhatWe text-center text-md-start paddingTop">What we do</h2>
                                <div class="text-center text-md-start">
                                    <p class="subText mb-4">
                                        Our clients have a broad range of backgrounds and requirements.
                                        We serve families looking to address succession and legacy challenges,
                                        as well as their investment portfolio and asset management objectives.
                                        <span class="subText fw-lighter mb-4">
                                            We help family offices invest in specific asset classes more efficiently.
                                            We also support private clients who have specific needs as entrepreneurs,
                                            professionals or corporate executives looking to best manage their savings for the long term.
                                            We analyze each specific case and develop a scope of services
                                            tailor-made to the client’s requirements and objectives.
                                        </span>
                                    </p>
                                </div>
                                <div class="col-sm-12 col-md-5 d-md-flex justify-content-center text-center text-md-start justify-content-md-start mt-5 mb-3">
                                    <a href="./ourApproach.php"><img src="./public/img/Buttons/buttonLearnMore2.svg" alt="Learn More"></a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 d-none d-md-block p-0 m-0 d-flex align-items-center">
                                <div class="col-sm-12 d-flex justify-content-center justify-content-md-end">
                                    <img class="imgHomeCapital animate__animated animate__backInRight animate__delay-0s animate__fast" src="./public/img/imgPortadas/LXG-Home-1.png" alt="Imagen 1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portadaHome2">
        </div>
        <div class="portadaOurApproach paddingTop paddingBottom">
            <div class="row m-0 p-0">
                <div class="col-sm-12">
                    <div class="container">
                        <div class="col-sm-6 col-md-12 justify-content-sm-center justify-content-md-start">
                            <p data-aos="fade-up" data-aos-anchor-placement="top-bottom" style="color: var(--title-color) !important; " class="textHome2 text-center text-md-start">
                                "Strive not to be a success, <br> but rather to be of value."
                            </p>
                            <p class="textWhite text-center text-md-start mb-5">
                                Albert Einstein
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sectionImage2">
            <div class="container">
                <div class="section col-sm-12 text-center text-md-start justify-content-center justify-content-md-start paddingTop paddingBottom">
                    <div class="container">
                        <img data-aos="zoom-in-left" class="imgContact" src="./public/img/imgPortadas/contact.png">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 align-self-start paddingTop mt-2">
                                <p class="subText fw-semibold">
                                    We are always looking to add team players who conduct according
                                    to firm ethical and moral standards.
                                </p>
                            </div>
                            <div class="col-sm-12 col-md-8 align-self-start">
                                <div class="container">
                                    <div class="row">
                                        <form id="contactForm" action="enviar.php" method="post">
                                            <div class="row">
                                                <div class="mb-4 text-start col-md-6">
                                                    <label for="firstName" class="form-label">First Name</label>
                                                    <input type="text" class="form-control bottom-border" id="firstName">
                                                </div>
                                                <div class="mb-4 text-start col-md-6">
                                                    <label for="lastName" class="form-label">Last Name</label>
                                                    <input type="text" class="form-control bottom-border" id="lastName">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-4 text-start col-md-6">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control bottom-border" id="email">
                                                </div>
                                                <div class="mb-4 text-start col-md-6">
                                                    <label for="subject" class="form-label">Subject</label>
                                                    <input type="text" class="form-control bottom-border" id="subject">
                                                </div>
                                            </div>
                                            <div class="mb-4 text-start col-12">
                                                <label for="message" class="form-label">Message</label>
                                                <textarea class="form-control bottom-border" id="message" rows="5"></textarea>
                                            </div>
                                            <div class="col-sm-12 justify-content-end text-end paddingForm">
                                                <button type="submit" class="btn2">Send</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php include("template/footer.php") ?>
    </footer>
    <!-- Incluir D3.js -->
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <!-- Incluir el script para manejar los datos y renderizar los nodos -->
    <script src="public/js/diagrama.js"></script>
    <script>
        window.addEventListener('scroll', function() {
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
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</body>
<script src="public/js/diagrama.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit-icons.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Control de Responsive Design !-->
<script>
    AOS.init();
</script>

</html>