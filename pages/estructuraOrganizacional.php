<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="../assets/img/iconUAnorte.png">
        <title>Estructura Organizacional - UAnorte</title>
        <link rel="stylesheet" href="../assets/css/preloader.css">
        <link rel="stylesheet" href="../assets/css/header.css">
        <link rel="stylesheet" href="../assets/css/footer.css">
        <link rel="stylesheet" href="../assets/css/FAB.css">
        <link rel="stylesheet" href="../assets/css/estructuraOrganizacional.css">
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
    <!-- =================================================== ORGANIZATIONAL STRUCTURE =================================================== -->

            <section class="estructura-container">

                <div class="estructura-info">
                    <h1>Estructura Organizacional</h1>
                    <p class="mensaje-mobile">
                        <i class="fa-solid fa-hand-point-right"></i>
                        Desliza horizontalmente para visualizar el organigrama completo.
                    </p>

                    <a href="../assets/img/Organigrama.svg"
                    target="_blank"
                    class="btn-organigrama">
                        <i class="fa-solid fa-up-right-from-square"></i>
                        Ver en pantalla completa
                    </a>
                </div>

                <div class="estructura-scroll">
                    <img
                        src="../assets/img/Organigrama.svg"
                        alt="Estructura Organizacional"
                        class="estructura-img">
                </div>

            </section>

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