<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="../assets/img/iconUAnorte.png">
        <title>Pregrado - UAnorte</title>
        <link rel="stylesheet" href="../assets/css/preloader.css">
        <link rel="stylesheet" href="../assets/css/header.css">
        <link rel="stylesheet" href="../assets/css/footer.css">
        <link rel="stylesheet" href="../assets/css/FAB.css">
        <link rel="stylesheet" href="../assets/css/pregrado.css">
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

        <!-- =================================================== PROGRAMS =================================================== -->
        <div class="programs">

        <!-- ================================ UNDERGRADUATE PROGRAMS ================================ -->
            <div class="undergraduate programs">
                <h1>Programas de Pregrado</h1>
                <h3>Formación profesional de calidad en ciencias sociales y humanas</h3>

                <div class="imgUndergraduatePrograms">
                    <a href="<?php echo BASE_URL; ?>pages/derecho.php">
                        <img src="../assets/img/prospectoDerecho.png" alt="Derecho">
                    </a>

                    <a href="#">
                        <img src="../assets/img/prospectoTrabajoSocial.png" alt="Trabajo Social">
                    </a>

                    <a href="#">
                        <img src="../assets/img/prospectoComunicacionSocialMedios.png" alt="Comunicación Social y Medios">
                    </a>

                    <a href="#">
                        <img src="../assets/img/prospectoPsicologia.png" alt="Psicología">
                    </a>
                </div> 
                
            </div>
        </div>

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