<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="../assets/img/iconUAnorte.png">
        <title>Derecho - UAnorte</title>
        <link rel="stylesheet" href="../assets/css/preloader.css">
        <link rel="stylesheet" href="../assets/css/header.css">
        <link rel="stylesheet" href="../assets/css/footer.css">
        <link rel="stylesheet" href="../assets/css/FAB.css">
        <link rel="stylesheet" href="../assets/css/derecho.css">
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

<!-- =================================================== LEGAL =================================================== -->
        <section class="hero">
            <div class="hero-text">
            <h1>Derecho</h1>
            <p>
                El programa de Derecho de UANORTE forma profesionales íntegros con sólidos conocimientos jurídicos,
                comprometidos con la justicia social y la transformación de la sociedad.
            </p>

            <button class="btn btn-primary">Inscríbete aquí</button>
            <button class="btn btn-secondary">Prospecto</button>
            </div>

            <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f" alt="Derecho">
        </section>

        <!-- CARDS -->
        <section class="cards">
            <div class="card">
            <h4>Duración</h4>
            <p>10 semestres</p>
            </div>

            <div class="card">
            <h4>Modalidad</h4>
            <p>Presencial</p>
            </div>

            <div class="card">
            <h4>Jornada</h4>
            <p>Diurna</p>
            </div>

            <div class="card">
            <h4>Código SNIES</h4>
            <p>12345</p>
            </div>
        </section>

        <section class="info">
            <div class="info-text">
            <h2>¿Por qué estudiar Derecho en UANORTE?</h2>
            <p>
                En la Corporación Universitaria Autónoma del Norte te ofrecemos una formación de calidad
                con docentes altamente calificados y una infraestructura moderna.
            </p>

            <p>
                Nuestro enfoque educativo combina la teoría con la práctica, permitiéndote adquirir
                competencias necesarias para enfrentar el mundo laboral.
            </p>
            </div>

            <div class="perfil">
            <h3>Perfil del Egresado</h3>
            <ul>
                <li>Profesional integral con sólidos conocimientos</li>
                <li>Capacidad de liderazgo y trabajo en equipo</li>
                <li>Compromiso social y ético</li>
                <li>Habilidades de investigación e innovación</li>
            </ul>
            </div>
        </section>

        <section class="cta">
        <h2>¿Listo para comenzar tu futuro?</h2>
        <p>Únete a la comunidad UANORTE y transforma tu vida</p>

        <div class="cta-buttons">
            <a href="#" class="btn btn-light">Solicitar información</a>
            <a href="#" class="btn btn-yellow">Inscríbete ahora</a>
        </div>
        </section>

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