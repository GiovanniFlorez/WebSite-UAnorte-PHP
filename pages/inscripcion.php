<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inscripciones - UAnorte</title>
        <link rel="icon" type="image/png" href="../assets/img/iconUAnorte.png">
        <link rel="stylesheet" href="../assets/css/inscripcion.css">
        <link rel="stylesheet" href="../assets/css/preloader.css">
        <link rel="stylesheet" href="../assets/css/header.css">
        <link rel="stylesheet" href="../assets/css/footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/gilroy-bold">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;1000;&display=swap" rel="stylesheet"> 
    </head>
    <body>
<!-- =================================================== INCLUDES =================================================== -->
        <?php include '../includes/preloader.php'; ?>
        <?php require_once '../includes/config.php'; ?>
        <?php include '../includes/header.php'; ?>
    
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
                            <a href="https://site2.q10.com/Preinscripcion?aplentId=ccfdab40-6d54-4719-a89c-e85a6c812a14" target="_blank" rel="noopener noreferrer" 
                            class="btn primary">
                                Inscríbete →
                            </a>

                            <a href="programas.php" class="btn secondary">
                                Conocer programas
                            </a>

                        </div>
                    </div>
                </div>

                <!------------------- Slider -------------------->
                <div class="hero-right">

                    <div class="slider">

                        <div class="slide active">
                            <img src="../assets/img/sliderIndex.png" alt="">
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

                        <a href="derecho.php">
                            <img src="../assets/img/prospectoDerecho.png">
                        </a>

                        <a href="trabajoSocial.php">
                            <img src="../assets/img/prospectoTrabajoSocial.png">
                        </a>

                        <a href="comunicacionSocialMedios.php">
                            <img src="../assets/img/prospectoComunicacionSocialMedios.png">
                        </a>

                        <a href="psicologia.php">
                            <img src="../assets/img/prospectoPsicologia.png">
                        </a>

                    </div>

                </div>


                <!-- ================================ GRADUATE PROGRAMS ================================ -->
                <div class="program-content" id="posgrado">

                    <p>
                        Especializaciones para profundizar tu conocimiento y experiencia.
                    </p>

                    <div class="cards">

                        <a href="EIC.php">
                            <img src="../assets/img/prospectoEspecializacionIntervencionComunitaria.png">
                        </a>

                        <a href="EDA.php">
                            <img src="../assets/img/prospectoEspecializacionDerechoAdministrativo.png">
                        </a>

                    </div>
                </div>
            </section>        
        </main>
<!-- =================================================== FOOTER =================================================== -->
        <?php include '../includes/footer.php'; ?>

<!-- =================================================== SCRIPTS =================================================== -->
        <script src="../assets/js/header.js"></script>
        <script src="../assets/js/preloader.js"></script>
        <script src="../assets/js/index.js"></script>
    </body>
</html>