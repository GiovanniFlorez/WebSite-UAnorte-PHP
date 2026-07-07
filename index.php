<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UAnorte</title>
        <link rel="icon" type="image/png" href="assets/img/iconUAnorte.png">
        <link rel="stylesheet" href="assets/css/index.css">
        <link rel="stylesheet" href="assets/css/preloader.css">
        <link rel="stylesheet" href="assets/css/header.css">
        <link rel="stylesheet" href="assets/css/footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/gilroy-bold">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;1000;&display=swap" rel="stylesheet"> 
    </head>
    <body>
<!-- =================================================== INCLUDES =================================================== -->
        <?php include 'includes/preloader.php'; ?>
        <?php require_once __DIR__ . '/includes/config.php'; ?>
        <?php include 'includes/header.php'; ?>

        <main>
            <!-- =================================================== HERO =================================================== -->
            <section class="hero">
                <div class="hero-left">
                    <div class="hero-content">

                        <h1>
                            Construye tu futuro con <span>UAnorte</span>
                        </h1>

                        <p>
                            Educación de calidad, innovación académica y formación integral
                            para los líderes del mañana.
                        </p>

                        <div class="hero-buttons">
                            <a href="<?php echo BASE_URL; ?>/pages/informacion.php" class="btn primary">
                                Inscríbete →
                            </a>

                            <a href="<?php echo BASE_URL; ?>/pages/programas.php" class="btn secondary">
                                Conocer programas
                            </a>

                        </div>
                    </div>
                </div>

                <!------------------- Slider -------------------->
                <div class="hero-right">

                    <div class="slider">

                        <div class="slide active">
                            <img src="assets/img/sliderIndex.png" alt="">
                        </div>

                        <button class="prev">&#10094;</button>
                        <button class="next">&#10095;</button>

                        <div class="dots">

                            <span class="dot active"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>

                        </div>
                    </div>
                </div>
            </section>

            <!-- =================================================== PROGRAMS =================================================== -->
            <section class="programs">

                <h1>Oferta Académica</h1>

                <h3>
                    Descubre nuestros programas diseñados para formar profesionales
                    comprometidos con el desarrollo social.
                </h3>

                <!-- BOTONES -->
                <div class="program-tabs">

                    <button class="tab-btn active" data-tab="pregrado">
                        Pregrado
                    </button>

                    <button class="tab-btn" data-tab="posgrado">
                        Posgrado
                    </button>

                </div>
            
                
                <div class="program-content active" id="pregrado">

                    <p>Formación profesional de calidad en ciencias sociales y humanas</p>

                    <!-- ================================ UNDERGRADUATE PROGRAMS ================================ -->
                    <div class="cards">

                        <a href="pages/derecho.php">
                            <img src="assets/img/prospectoDerecho.png">
                        </a>

                        <a href="pages/trabajoSocial.php">
                            <img src="assets/img/prospectoTrabajoSocial.png">
                        </a>

                        <a href="pages/comunicacionSocialMedios.php">
                            <img src="assets/img/prospectoComunicacionSocialMedios.png">
                        </a>

                        <a href="pages/psicologia.php">
                            <img src="assets/img/prospectoPsicologia.png">
                        </a>

                    </div>

                </div>


                <!-- ================================ GRADUATE PROGRAMS ================================ -->
                <div class="program-content" id="posgrado">

                    <p>
                        Especializaciones para profundizar tu conocimiento y experiencia.
                    </p>

                    <div class="cards">

                        <a href="pages/EIC.php">
                            <img src="assets/img/prospectoEspecializacionIntervencionComunitaria.png">
                        </a>

                        <a href="pages/EDA.php">
                            <img src="assets/img/prospectoEspecializacionDerechoAdministrativo.png">
                        </a>

                    </div>

                </div>

            </section>
            <!-- =================================================== ABOUT UANORTE =================================================== -->
            <div class="about">
                <div class="text">
                    <h1>Acerca De UAnorte</h1>
                    <p>
                        La Corporación Universitaria Autónoma del Norte - UANorte es la primera 
                        institución privada de Norte de Santander, con una sólida experiencia 
                        educativa, vinculada y comprometida con el crecimiento regional. 
                        Ofrecemos los programas de Derecho, Comunicación Social, Trabajo Social y 
                        Psicología, diseñados para formar profesionales íntegros y altamente 
                        competitivos. Aportamos a la educación con becas, descuentos y métodos de 
                        financiación. ¡Crecemos juntos, creemos en lo nuestro!
                    </p>
                </div>

                <div class="imgAboutUAnorte">
                    <img src="assets/img/UAnorte.jfif" alt="Acerca de UAnorte">
                </div>
            </div>
        
        </main>
<!-- =================================================== FOOTER =================================================== -->
        <?php include 'includes/footer.php'; ?>

<!-- =================================================== SCRIPTS =================================================== -->
        <script src="assets/js/header.js"></script>
        <script src="assets/js/preloader.js"></script>
        <script src="assets/js/index.js"></script>
    </body>
</html>