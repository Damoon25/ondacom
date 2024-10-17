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
        <div id="section1" class="paddingTop paddingBottom">
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
        <div class="portadaSection2 m-0"></div>
        <div id="section3" class="paddingTop paddingBottom">
            <div class="container">
                <div class="col-12 text-center">
                    <h2 class="titleSection" style="color: var(--link) !important;">
                        Consectetur <span class="highlight3">adipiscing</span>
                    </h2>
                </div>
                <div class="col-8 mb-md-4 text-center mx-auto paddingBottom">
                    <p style="color: var(--link) !important;"
                        class="text1 animate__animated animate__backInRight animate__delay-0s animate__fast">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
                <div class="col-sm-12 position-relative">
                    <div class="container">
                        <div class="row position-relative">
                            <!-- Columna de nodo 1 -->
                            <div class="col-md-2 d-flex flex-column align-items-center position-relative">

                                <img src="./public/img/icons/conexion-12.svg" alt="" class="icon-connection12" />
                                <!-- Nodo 1 -->
                                <div id="node1" class="d-flex justify-content-center align-items-center position-relative"></div>
                            </div>
                            <div class="col-md-2 d-flex flex-column align-items-center position-relative">
                                <!-- Nodo 2 -->
                                <div id="node2" class="d-flex justify-content-center align-items-center position-relative"></div>

                                <img src="./public/img/icons/conexion-23.svg" alt="" class="icon-connection23" />

                            </div>
                            <div class="col-md-2 d-flex flex-column align-items-center position-relative">

                                <div class="position-relative">
                                    <img src="./public/img/icons/conexion-34.png" alt="" class="icon-connection34" />
                                </div>
                                <!-- Nodo 3 -->
                                <div id="node3" class="d-flex justify-content-center align-items-center position-relative m-0"></div>

                                <div class="position-relative">
                                    <img src="./public/img/icons/conexion-36.png" alt="" class="icon-connection36" />
                                </div>
                            </div>
                            <div class="col-md-3 d-flex flex-column">
                                <div id="node4" class="mb-5"></div>
                                <div id="node5" class="mb-5"></div>
                                <div id="node6"></div>
                            </div>
                            <div class="col-md-3">
                                <div id="info-panel" class="info-panel" style="visibility: hidden;">
                                    <img src="" alt="Icono" style="display: block; text-align: start;" /> <!-- Alineado a la izquierda -->
                                    <h2 class="numberInfoPanel">se encuentra el id...</h2>
                                    <p class="subtextInfoPanel"><strong>se encuentra el nombre...</strong></p>
                                    <p class="textInfoPanel">se encuentran los detalles...</p>
                                </div>
                            </div>
                        </div>
                        <!-- Contenedor SVG para las líneas -->
                        <svg id="lines"></svg>
                    </div>

                </div>
            </div>
        </div>
        <div id="section4" class="paddingTop paddingBottom">
            <div class="container menu-container">
                <div class="col-12 text-center">
                    <h2 class="titleSection">
                        <span class="highlight3">Serviços </span> <span style="color: var(--color1) !important;">prestados</span>
                    </h2>
                </div>
                <div class="col-8 mb-md-4 text-center mx-auto paddingBottom">
                    <p class="text1 animate__animated animate__backInRight animate__delay-0s animate__fast">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
                        Suspendisse varius enim in eros elementum tristique.
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="menu-card d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                            <div class="d-flex align-items-center">
                                <img src="./public/img/icons/icon-mundo-G.svg" alt="Icono">
                                <div class="menu-title ms-3">Implantação/Projetos</div>
                            </div>
                            <div class="plus-icon">+</div>
                        </div>
                        <div id="collapse1" class="collapse">
                            <div class="card card-body">
                                <ul class="menu-text">
                                    <li>Elaboração e adequação de projetos para atendimento de cliente em fibra ótica em todo Brasil</li>
                                    <li>Construção de redes GPON para crescimento de planta de fibra ótica</li>
                                    <li>Construção de redes backbone para abordagens de sites e novos anéis de interligação</li>
                                    <li>Construção de prumadas de prédios para atendimento de clientes com fibra ótica</li>
                                    <li>Construção de rede de fibra ótica para atendimento de empresas e órgãos públicos</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="menu-card d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            <div class="d-flex align-items-center">
                                <img src="./public/img/icons/icon-objeto2-G.svg" alt="Icono">
                                <div class="menu-title ms-3">Rede de Fibra Ótica (GPON)</div>
                            </div>
                            <div class="plus-icon">+</div>
                        </div>
                        <div id="collapse2" class="collapse">
                            <div class="card card-body">
                                <ul class="menu-text">
                                    <li>Monitoramento de eventos na rede de fibra ótica para atendimento ao cliente</li>
                                    <li>Manutenção da rede de fibra ótica para atendimento ao cliente na remoção de defeitos de campo</li>
                                    <li>Execução de obras de melhoria da rede de fibra ótica de forma preventiva</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="menu-card d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            <div class="d-flex align-items-center">
                                <img src="./public/img/icons/icon-telefono-G.svg" alt="Icono">
                                <div class="menu-title ms-3">Rede Móvel</div>
                            </div>
                            <div class="plus-icon">+</div>
                        </div>
                        <div id="collapse3" class="collapse">
                            <div class="card card-body">
                                <ul class="menu-text">
                                    <li>Monitoramento de eventos na rede Móvel</li>
                                    <li>Manutenção de sites e centrais telefônicas da rede móvel</li>
                                    <li>Manutenção de infraestrutura dos Sites voltadas à parte elétrica e ar condicionado</li>
                                    <li>Serviço de zeladoria voltados à limpeza e manutenção de prédios e sites</li>
                                    <li>Atuação no reabastecimento de GMG nas centrais</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="menu-card d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            <div class="d-flex align-items-center">
                                <img src="./public/img/icons/icon-lupa-G.svg" alt="Icono">
                                <div class="menu-title ms-3">Backbone</div>
                            </div>
                            <div class="plus-icon">+</div>
                        </div>
                        <div id="collapse4" class="collapse">
                            <div class="card card-body">
                                <ul class="menu-text">
                                    <li>Monitoramento de eventos na rede de fibra ótica</li>
                                    <li>Manutenção de Rede de fibra ótica de transporte nacional e regional</li>
                                    <li>Execução de obras de melhorias em redes de fibra ótica de forma preventiva</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="menu-card d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            <div class="d-flex align-items-center">
                                <img src="./public/img/icons/icon-cable-G.svg" alt="Icono">
                                <div class="menu-title ms-3">Rede Metálica</div>
                            </div>
                            <div class="plus-icon">+</div>
                        </div>
                        <div id="collapse5" class="collapse">
                            <div class="card card-body">
                                <ul class="menu-text">
                                    <li>Monitoramento de eventos na rede de cobre para atendimento ao cliente</li>
                                    <li>Manutenção de rede de cobre para atendimento ao cliente na remoção de defeitos de campo</li>
                                    <li>Acompanhamento de pressurização dos cabos subterrâneos</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="menu-card d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                            <div class="d-flex align-items-center">
                                <img src="./public/img/icons/icon-casa-G.svg" alt="Icono">
                                <div class="menu-title ms-3">Casa Cliente</div>
                            </div>
                            <div class="plus-icon">+</div>
                        </div>
                        <div id="collapse6" class="collapse">
                            <div class="card card-body">
                                <ul class="menu-text">
                                    <li>Monitoramento de eventos na rede de fibra ótica</li>
                                    <li>Instalação de fibra ótica para clientes</li>
                                    <li>Reparo de fibra ótica para clientes</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portadaSection3 m-0"></div>
        <div id="map" style="width: 100%; height: 825px; position: relative;"></div>
        <img id="corner-image" src="public/img/icons/vector-colores.png" alt="Esquina" class="corner-image d-none d-md-block" />
        <div id="section6" class="container">
            <div class="col-sm-12 flex-column flex-md-row paddingTop paddingBottom">
                <div class="row">
                    <div class="col-sm-12 col-md-6 order-md-2">
                        <img data-aos="fade-left" class="imageSection p-md-5 pe-md-0" src="./public/img/imgPortadas/IMG-HOME-4.jpg" alt="Imagen 4">
                    </div>
                    <div class="col-sm-12 pe-md-0 col-md-6 order-md-1 align-self-center">
                        <div class="align-self-start paddingBottom">
                            <h3 class="subtitle1 fw-bolder mb-2">Quem somos</h3>
                            <p class="text1">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Suspendisse varius enim in eros elementum tristique.
                                Duis cursus, mi quis viverra ornare, eros dolor interdum nulla,
                                ut commodo diam libero vitae erat.
                            </p>
                        </div>
                        <div class="mt-md-5">
                            <h4 class="title1 fw-bold text-center text-md-start" style="color: var(--color4) !important;">Visão</h4>
                            <p class="minText">
                                Ser reconhecida pela excelência na prestação de serviços junto aos nossos clientes.
                                Estar presente na contínua expansão da conectividade para atendimento das
                                crescentes demandas de telecomunicações.
                            </p>
                        </div>
                        <div class="mt-2">
                            <h4 class="title1 fw-bold text-center text-md-start" style="color: var(--color4) !important;">Missão</h4>
                            <p class="minText">
                                Oferecer serviços confiáveis e inovadores,
                                conectando pessoas e negócios em todo o mundo,
                                com excelência operacional e compromisso com a satisfação do cliente.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img id="corner-image2" src="public/img/icons/vector-colores2.png" alt="Esquina" class="corner-image2 d-none d-md-block" />
        <div class="container">
            <div class="col-sm-12 flex-column flex-md-row paddingBottom">
                <div class="row">
                    <div class="col-sm-12 col-md-6 order-md-1">
                        <img data-aos="fade-left" class="imageSection2 p-md-5 ps-md-0" src="./public/img/imgPortadas/IMG-HOME-5.png" alt="Imagen 5">
                    </div>
                    <div class="col-sm-12 pe-md-0 col-md-6 order-md-2 align-self-center">
                        <div class="mt-md-5">
                            <h4 class="title1 fw-bold text-center text-md-start" style="color: var(--color4) !important;">Valores</h4>
                            <p class="minText">
                                <strong>Confiabilidade:</strong><br>
                                Garantir que os serviços em telecomunicações estejam
                                sempre disponíveis e sejam consistentes em termos de qualidade e
                                desempenho. <br><br>

                                <strong>Integridade:</strong><br>
                                Agir com transparência e honestidade em todas as interações
                                com clientes, colaboradores e parceiros. <br><br>

                                <strong>Excelência Operacional:</strong><br>
                                Buscar a eficiência em todas as operações,
                                desde a infraestrutura até o atendimento ao cliente final. <br><br>

                                <strong>Compromisso com os clientes: </strong><br>
                                Oferecer um excelente atendimento aos nossos clientes com soluções
                                personalizadas para suas necessidades e expectativas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container paddingBottom">
            <div id="section7" class="col-sm-12 justify-content-center text-center mb-5">
                <h2 class="subtitle1">Clientes</h2>
            </div>
            <div class="row col-sm-12 flex-sm-column flex-md-row justify-content-center align-items-center text-center">
                <div class="col-sm-12 col-md-2">
                    <img src="./public/img/brands/logo-1.png" alt="logo 1">
                </div>
                <div class="col-sm-12 col-md-2">
                    <img src="./public/img/brands/logo-2.jpg" alt="logo 2">
                </div>
                <div class="col-sm-12 col-md-2">
                    <img src="./public/img/brands/logo-3.jpg" alt="logo 3">
                </div>
                <div class="col-sm-12 col-md-2">
                    <img src="./public/img/brands/logo-4.jpg" alt="logo 4">
                </div>
                <div class="col-sm-12 col-md-2">
                    <img src="./public/img/brands/logo-5.jpg" alt="logo 5">
                </div>
            </div>
        </div>
        <div class="sectionBack7 paddingTop paddingBotttom">
            <div class="container py-5">
                <div class="row text-center align-items-center">
                    <div class="col-12 col-md-5 justify-content-end">
                        <h2 class="fw-bold display-4" style="color: var(--color2)!important;">+ 1.800</h2>
                        <p class="text-info fw-bold">Veículos</p>
                    </div>
                    <div class="col-12 col-md-2 d-flex justify-content-center align-items-center">
                        <hr class="hr-line">
                    </div>
                    <div class="col-12 col-md-5 justify-content-start">
                        <h2 class="fw-bold display-4" style="color: var(--color2)!important;">+ 2.200</h2>
                        <p class="text-info fw-bold">Colaboradores</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container paddingTop paddingBottom mb-5">
            <div id="section8" class="col-sm-12 justify-content-center text-center mb-3">
                <h2 class="subtitle1">Equipe</h2>
            </div>
            <div class="col-sm-12 justify-content-center text-center mb-5">
                <h4 class="title1" style="color: var(--color1) !important;">Líderes</h4>
            </div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-container">
                            <img src="public/img/team/PEOPLE-1.jpg" alt="imagen 1">
                            <div class="overlay">
                                <h3 class="title-carousel">Matheus do Monte</h3>
                                <p class="text-carousel">Diretor Operacional</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-container">
                            <img src="public/img/team/PEOPLE-2.jpg" alt="imagen 2">
                            <div class="overlay">
                                <h3 class="title-carousel">Fabio Gonzaga</h3>
                                <p class="text-carousel">Diretor Operacional</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-container">
                            <img src="public/img/team/PEOPLE-3.jpg" alt="imagen 3">
                            <div class="overlay">
                                <h3 class="title-carousel">Fabio Sola</h3>
                                <p class="text-carousel">Diretor Comercial</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-container">
                            <img src="public/img/team/PEOPLE-4.jpg" alt="imagen 4">
                            <div class="overlay">
                                <h3 class="title-carousel">Marcelo Vallada</h3>
                                <p class="text-carousel">Diretor Administrativo Financeiro</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div> -->
            </div>
        </div>
        <div id="section9">
            <div class="container">
                <div class="col-sm-12 justify-content-center text-center mb-3">
                    <h2 class="subtitle1"><span class="highlight4">Trabalhe</span>
                        <span style="color: var(--color2) !important;">Conosco</span>
                    </h2>
                </div>
                <div class="col-sm-12 justify-content-center text-center mb-3">
                    <h4 class="text1 fw-lighter" style="color: var(--color2) !important;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </h4>
                </div>
                <div class="col-sm-12 justify-content-center text-center align-items-center">
                    <a href="trabalheConosco.php"><img src="./public/img/Buttons/btn-CV.svg" alt="btn fale conosco"></a>
                </div>
            </div>
        </div>
        <div class="portadaConosco m-0"></div>
        <div id="section10">
            <div class="container">
                <div class="col-sm-12 text-center justify-content-center">
                    <h2 class="subtitle1 mb-3"><span class="highlight4">Fale</span>
                        <span style="color: var(--color2) !important;">Conosco</span>
                    </h2>
                    <h4 class="text1 fw-lighter" style="color: var(--color2) !important;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </h4>
                    <div class="container py-5">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <form class="text-start" action="enviar.php" method="post">
                                    <div class="mb-3">
                                        <label for="nome" class="form-label">Nome</label>
                                        <input type="text" class="form-control rounded-pill border-light" id="nombre" name="nombre">
                                    </div>
                                    <div class="mb-3">
                                        <label for="sobrenome" class="form-label">Sobrenome</label>
                                        <input type="text" class="form-control rounded-pill border-light" id="apellido" name="apellido">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control rounded-pill border-light" id="email" name="email">
                                    </div>
                                    <div class="mb-5">
                                        <label for="mensagem" class="form-label">Mensagem</label>
                                        <textarea class="form-control rounded-3 border-light" id="mensagem" rows="4" name="asunto" placeholder="Digite sua mensagem..."></textarea>
                                    </div>
                                    <div class="col-sm-12 text-center justify-content-center align-items-center">
                                        <button type="submit" style="background: none !important; border: none !important;">
                                            <img src="./public/img/Buttons/enviar.svg">
                                        </button>
                                    </div>
                                </form>
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
    <!-- FW PARA CAROUSEL -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- FW PARA DIAGRAMA -->
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <script>
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
                640: {
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
    </script>
    <!-- FW PARA EL MAPA -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="public/js/diagrama.js"></script>
    <script src="public/js/mapa.js"></script>
    <script src="public/js/main.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</body>

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