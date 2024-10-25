<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("template/meta.php") ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/css/uikit.min.css" />
    <title>Ondacom | Home</title>
</head>

<body>

    <?php include("template/header.php") ?>
    <main>
        <div class="paddingBottom" style="padding-top: 10% !important;">
            <div class="container">
                <div class="col col-sm-12">
                    <div class="col-sm-12">
                        <div class="container">
                            <div class="alert alert-danger mt-5 mb-3 text-center" role="alert">
                                <p class="parrafo fs-5">
                                    Ocorreu um erro ao enviar a mensagem. Tente novamente.
                                </p>
                                <div class="col-sm-12 d-flex justify-content-center align-items-center">
                                    <button type="button" class="btn btnCancel btn-lg rounded-pill" style="width: 30%;"><a class="text-decoration-none" href="index.php" style="color: #ffff;"><i class="fas fa-left-to-line" style="color: #ffff;"></i> RETORNAR</a></button>
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
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>


</html>