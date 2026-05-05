<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Coming-Soon</title>
        <link rel="icon" type="image/png" href="../assets/img/iconUAnorte.png">
        <link rel="stylesheet" href="../assets/css/preloader.css">
        <link rel="stylesheet" href="../assets/css/header.css">
        <link rel="stylesheet" href="../assets/css/footer.css">
        <link rel="stylesheet" href="../assets/css/FAB.css">
        <link rel="stylesheet" href="../assets/css/coming-soon.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/gilroy-bold">



    </head>
    <body>
<!-- =================================================== INCLUDES =================================================== -->
        <?php include '../includes/preloader.php'; ?>
        <?php require_once '../includes/config.php'; ?>
        <?php include '../includes/header.php'; ?>
        <?php include '../includes/FAB.php'; ?>

<!-- =================================================== Coming-Soon =================================================== -->
        <div class="container">

            <div class="circle"><i class="fa-solid fa-road-barrier"></i></div>

            <h1>Estamos trabajando en esta sección</h1>

            <p>Estará disponible próximamente.</p>

            <p>Nuestro equipo está trabajando para brindarte la mejor experiencia. Gracias por tu paciencia.</p>

            <div class="buttons">
                <a href="<?php echo BASE_URL; ?>index.php">
                    <button class="btn btn-primary"><i class="fa-solid fa-house"></i> Volver al inicio</button>
                </a>
            </div>

            <div class="card">
                <h3>¿Necesitas información?</h3>
                <p>Si necesitas acceder a esta información de forma urgente, puedes contactarnos directamente.</p>
                <p><i class="fa-solid fa-phone"></i> +57 300 123 4567 | <i class="fa-solid fa-envelope"></i> info@uanorte.edu.co</p>
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