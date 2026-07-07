<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Programas - UAnorte</title>
        <link rel="icon" type="image/png" href="../assets/img/iconUAnorte.png">
        <link rel="stylesheet" href="../assets/css/index.css">
        <link rel="stylesheet" href="../assets/css/preloader.css">
        <link rel="stylesheet" href="../assets/css/header.css">
        <link rel="stylesheet" href="../assets/css/footer.css">
        <link rel="stylesheet" href="../assets/css/FAB.css">
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
            <!-- =================================================== PROGRAMS =================================================== -->
            <div class="programs">

            <!-- ================================ UNDERGRADUATE PROGRAMS ================================ -->
                <div class="undergraduate programs">
                    <h1>Programas de Pregrado</h1>
                    <h3>Formación profesional de calidad en ciencias sociales y humanas</h3>

                    <div class="imgUndergraduatePrograms">
                        <a href="../pages/derecho.php">
                            <img src="../assets/img/prospectoDerecho.png" alt="Prospecto Derecho">
                        </a>

                        <a href="../pages/trabajoSocial.php">
                            <img src="../assets/img/prospectoTrabajoSocial.png" alt="Prospecto Trabajo Social">
                        </a>

                        <a href="../pages/comunicacionSocialMedios.php">
                            <img src="../assets/img/prospectoComunicacionSocialMedios.png" alt="Prospecto Comunicación Social y Medios">
                        </a>

                        <a href="../pages/Psicologia.php">
                            <img src="../assets/img/prospectoPsicologia.png" alt="Prospecto Psicología">
                        </a>
                    </div>
                </div>

            <!-- ================================ GRADUATE PROGRAMS ================================ -->
                <div class="graduate programs">
                    <h1>Programas de Posgrado</h1>
                    <h3>Especializaciones para profundizar tu conocimiento y experiencia</h3>

                    <div class="imgGraduatePrograms">
                        <a href="../pages/EIC.php">
                            <img src="../assets/img/prospectoEspecializacionIntervencionComunitaria.png" alt="Prospecto Especialización En Intervención Comunitaria">
                        </a>

                        <a href="../pages/EDA.php">
                            <img src="../assets/img/prospectoEspecializacionDerechoAdministrativo.png" alt="Prospecto Especialización En Derecho Administrativo">
                        </a>
                    </div>
                </div>
            </div>
            <br>
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