<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("template/meta.php") ?>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/css/uikit.min.css" />
    <title>Ondacom | Trabalhe Conosco </title>
</head>

<body>
    <header>
        <?php include("template/header.php") ?>
    </header>
    <main>
        <div id="formCV" class="paddingTop paddingBottom">
            <div class="container">
                <div class="col-12 text-center">
                    <h2 class="titleSection mb-md-5">
                        <span class="highlight3">Trabalhe </span> <span style="color: var(--color1) !important;">Conosco</span>
                    </h2>
                </div>
                <div class="col-8 mb-md-4 text-start text-md-center mx-auto">
                    <p class="text1 animate__animated animate__backInRight animate__delay-0s animate__fast">
                        Se você está interessado em fazer parte da equipe da OndaCom, por favor,
                        envie seu currículo e carta de apresentação através do formulário abaixo.
                        Entraremos em contato caso haja oportunidades compatíveis com seu perfil.
                    </p>
                </div>
                <div class="py-5">
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <form class="text-start" action="enviar.php" method="post">
                                <div class="mb-3">
                                    <label for="nome" class="form-label" style="color: var(--color1) !important;">Nome</label>
                                    <input type="text" class="form-control custom-input-form rounded-pill" id="nombre" name="nombre">
                                </div>
                                <div class="mb-3">
                                    <label for="sobrenome" class="form-label" style="color: var(--color1) !important;">Sobrenome</label>
                                    <input type="text" class="form-control custom-input-form rounded-pill" id="apellido" name="apellido">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label" style="color: var(--color1) !important;">Email</label>
                                    <input type="email" class="form-control custom-input-form rounded-pill" id="email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="cargo" class="form-label" style="color: var(--color1) !important;">Cargo Desejado</label>
                                    <input type="email" class="form-control custom-input-form rounded-pill" id="cargo" name="cargo">
                                </div>
                                <div class="mb-3">
                                    <label for="curriculo" class="form-label" style="color: var(--color1) !important;">Currículo</label>
                                    <input type="file" class="form-control custom-input-form rounded-pill d-none" id="curriculo" name="curriculo" accept=".pdf,.doc,.docx">
                                    <label for="curriculo" class="btn btn-outline-primary rounded-pill w-100">Por favor, anexe seu currículo (formatos suportados: PDF, DOC, DOCX)</label>
                                    <span id="fileName" style="color: var(--color1); font-size: 14px;"></span>
                                </div>
                                <div class="mb-3">
                                    <label for="carta" class="form-label" style="color: var(--color1) !important;">Carta de Apresentação</label>
                                    <textarea class="form-control custom-input-form rounded-3"
                                        id="carta" rows="6" name="carta"
                                        placeholder="Descreva suas habilidades, experiências e motivações para se juntar à equipe da OndaCom..."></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="disponibilidad" class="form-label" style="color: var(--color1) !important;">Disponibilidade:</label>
                                    <input type="email" class="form-control custom-input-form rounded-pill" id="disponibilidad" name="disponibilidad"
                                        placeholder="Quando você estaria disponível para começar a trabalhar?">
                                </div>
                                <div class="form-check mb-5">
                                    <input class="form-check-input custom-check" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" style="color: var(--color1) !important;" for="flexCheckDefault">
                                        Ao enviar este formulário, você concorda com os nossos Termos de Serviço e Política de Privacidade.
                                    </label>
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
    </main>
    <footer>
        <?php include("template/footer.php") ?>
    </footer>
    <!-- FW PARA CAROUSEL -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- FW PARA DIAGRAMA -->
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <!-- FW PARA EL MAPA -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="public/js/diagrama.js"></script>
    <script src="public/js/mapa.js"></script>
    <script src="public/js/main.js"></script>
    <!-- Fancybox JS -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0.27/dist/fancybox.umd.js"></script>
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