<?php
$currentFile = basename($_SERVER['PHP_SELF']);
$isIndex = $currentFile === 'index.php';
?>

<nav class="container navbar navbar-expand-lg navbar-custom fixed-top pt-3 pb-3 <?php echo !$isIndex ? 'navbar-scrolled' : ''; ?>">
    <a class="navbar-brand ms-auto pt-3" style="margin-left: 0px !important;" href="<?php echo $isIndex ? '#' : 'index.php'; ?>">
        <img src="<?php echo !$isIndex ? './public/img/logoBlue.svg' : './public/img/logo.svg'; ?>" id="logo" alt="logo" class="logo sm-auto d-block">
    </a>
    <button class="btnMenu d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
        <img src="./public/img/Buttons/menu.svg" alt="Menu">
    </button>
    <div class="offcanvas offcanvas-end d-xxl-none d-xl-none" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <a class="navbar-brand ms-auto ps-3 pt-3" style="margin-left: 0px !important;" href="<?php echo $isIndex ? '#' : 'index.php'; ?>">
                <img src="<?php echo !$isIndex ? './public/img/logo.svg' : './public/img/logo.svg'; ?>" id="logo" alt="logo" class="logo sm-auto d-block">
            </a>
            <button class="ms-2" type="button" data-bs-dismiss="offcanvas" aria-label="Close" style="background:none; border:none;">
                <img src="./public/img/Buttons/btnAtras.svg" alt="Atras">
            </button>
        </div>
        <div class="offcanvas-body d-block d-lg-none text-start">
            <ul class="container col-sm-12 navbar-nav me-auto ps-3">
                <li class="pt-4 pe-4">
                    <a style="color: var(--color2) !important;" class="btn-nav nav-link rounded-pill btn-lg" href="<?php echo $isIndex ? '#section4' : 'index.php#section4'; ?>">Serviços</a>
                </li>
                <li class="pt-4 pe-4">
                    <a style="color: var(--color2) !important;" class="btn-nav nav-link rounded-pill btn-lg" href="<?php echo $isIndex ? '#section6' : 'index.php#section6'; ?>">Quem somos</a>
                </li>
                <li class="pt-4 pe-4">
                    <a style="color: var(--color2) !important;" class="btn-nav nav-link rounded-pill btn-lg" href="<?php echo $isIndex ? '#section7' : 'index.php#section7'; ?>">Clientes</a>
                </li>
                <li class="pt-4 pe-4">
                    <a style="color: var(--color2) !important;" class="btn-nav nav-link rounded-pill btn-lg" href="<?php echo $isIndex ? '#section8' : 'index.php#section8'; ?>">Equipe</a>
                </li>
                <li class="pt-4 pe-3">
                    <a style="color: var(--color2) !important;" class="btn-nav nav-link rounded-pill btn-lg" href="trabalheConosco.php">Trabalhe Conosco</a>
                </li>
                <li class="pt-4 pe-4">
                    <a href="<?php echo $isIndex ? '#section10' : 'index.php#section10'; ?>">
                        <img src="./public/img/Buttons/btn_faleConosco.svg" alt="Fale Conosco">
                    </a>
                </li>
            </ul>
        </div>

    </div>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
            <li class="pt-4 pe-4">
                <button class="btn-nav btn rounded-pill btn-lg"><a class="nav-link" href="<?php echo $isIndex ? '#section4' : 'index.php#section4'; ?>">Serviços</a></button>
            </li>
            <li class="pt-4 pe-3">
                <button class="btn-nav btn rounded-pill btn-lg"><a class="nav-link" href="<?php echo $isIndex ? '#section6' : 'index.php#section6'; ?>">Quem somos</a></button>
            </li>
            <li class="pt-4 pe-3">
                <button class="btn-nav btn rounded-pill btn-lg"><a class="nav-link" href="<?php echo $isIndex ? '#section7' : 'index.php#section7'; ?>">Clientes</a></button>
            </li>
            <li class="pt-4 pe-3">
                <button class="btn-nav btn rounded-pill btn-lg"><a class="nav-link" href="<?php echo $isIndex ? '#section8' : 'index.php#section8'; ?>">Equipe</a></button>
            </li>
            <li class="pt-4 pe-3">
                <button class="btn-nav btn rounded-pill btn-lg"><a class="nav-link" href="trabalheConosco.php">Trabalhe Conosco</a></button>
            </li>
            <li class="pt-4 pe-4">
                <a href="<?php echo $isIndex ? '#section10' : 'index.php#section10'; ?>"><img width="85%" src="./public/img/Buttons/btn_faleConosco.svg" alt="Fale Conosco"></a>
            </li>
        </ul>
    </div>
</nav>