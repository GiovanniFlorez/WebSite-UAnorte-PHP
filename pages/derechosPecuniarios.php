<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Derechos Pecuniarios - UAnorte</title>
            <link rel="icon" type="image/png" href="../assets/img/iconUAnorte.png">
            <link rel="stylesheet" href="../assets/css/preloader.css">
            <link rel="stylesheet" href="../assets/css/header.css">
            <link rel="stylesheet" href="../assets/css/footer.css">
            <link rel="stylesheet" href="../assets/css/FAB.css">
            <link rel="stylesheet" href="../assets/css/derechosPecuniarios.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
            <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/gilroy-bold">
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;1000;&display=swap" rel="stylesheet">
    </head>
    <body>
<!-- =================================================== INCLUDES =================================================== -->
        <?php include '../includes/preloader.php'; ?>
        <?php require_once '../includes/config.php'; ?>
        <?php include '../includes/header.php'; ?>
        <?php include '../includes/FAB.php'; ?>

        <main>
            <!-- =================================================== HERO =================================================== -->
            <section class="hero">
                <h1>Derechos Pecuniarios</h1>
                <p>
                    Consulta la información sobre costos, aranceles y derechos pecuniarios de los programas 
                    académicos la Corporación Universitaria Autónoma del Norte (UAnorte).
                </p>
            </section>

            <div class="container">
                <section class="card">
                    <div class="card-header">
                        <div class="icon-box blue">
                            <i class="fa-regular fa-file-lines"></i>
                        </div>

                        <h2 class="card-title">Documento de Derechos Pecuniarios</h2>
                    </div>

                    <a href="../assets/pdf/Estatutos-UAnorte.pdf" target="_blank">
                        <div class="doc-item">
                            <div class="doc-left">
                                <div class="doc-icon">
                                    <i class="fa-regular fa-file-pdf"></i>
                                </div>

                                <span class="doc-title">
                                    Derechos Pecuniarios
                                </span>
                            </div>

                            <i class="fa-solid fa-download download"></i>
                        </div>
                    </a>
                </section>

                <section class="info-financiera">
                    <div class="info-left">
                        <div class="info-icon">
                            <i class="fa-regular fa-file-lines"></i>
                        </div>

                        <div class="info-text">
                            <h3>¿Necesitas más información?</h3>

                            <p>
                                Si tienes preguntas sobre los derechos pecuniarios, métodos de
                                pago o necesitas asesoría financiera, nuestro equipo está
                                disponible para ayudarte.
                            </p>
                        </div>
                    </div>

                    <a href="mailto:p.adminfinanciero@uanorte.edu.co" class="info-btn">
                        Contactar área financiera
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </section>
            </div>
        </main>
<!-- =================================================== FOOTER =================================================== -->
        <div class="footer">
            <?php include '../includes/footer.php'; ?>
        </div>
<!-- =================================================== SCRIPTS =================================================== -->
        <script src="../assets/js/header.js"></script>
        <script src="../assets/js/preloader.js"></script>
        <script src="../assets/js/FAB.js"></script>
    </body>
</html>