<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/gilroy-bold">
        <title>Document</title>
    </head>

    <body>
        <header class="header">

<!-- =================================================== LOGO =================================================== -->
            <div class="logo">
                <a href="<?php echo BASE_URL; ?>index.php">
                    <img src="<?php echo BASE_URL; ?>assets/img/logoUAnorte.png" alt="Logo UANorte">
                </a>
            </div>

<!-- =================================================== BOTÓN HAMBURGUESA =================================================== -->
            <div class="menu-toggle" id="menuToggle">☰</div>

            <nav id="navMenu">
                <ul class="menu">
                    <li class="has-submenu">
                        <span>Nosotros</span>

                        <button class="submenu-toggle" aria-label="Toggle submenu">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"/>
                            </svg>
                        </button>

                        <div class="submenu">
                            <ul>
                                <li><a href="<?php echo BASE_URL; ?>pages/informacionInstitucional.php">Información Institucional</a></li>
                                <li><a href="<?php echo BASE_URL; ?>pages/estructuraOrganizacional.php">Estructura Organizacional</a></li>
                                <li><a href="<?php echo BASE_URL; ?>pages/directorio.php">Directorio</a></li>
                                <li><a href="#">Normatividad</a></li>
                                <li><a href="#">Derechos Pecuniarios</a></li>
                                <li><a href="<?php echo BASE_URL; ?>pages/cienciaInnovacion.php">Ciencia e innovación</a></li>
                                <li><a href="#">Extensión</a></li>
                                <li><a href="#">Bienestar</a></li>
                                <li><a href="#">Biblioteca</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="has-submenu">
                        <span>Admisiones</span>

                        <button class="submenu-toggle" aria-label="Toggle submenu">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"/>
                            </svg>
                        </button>

                        <div class="submenu">
                            <ul>
                                <li><a href="#">Aspirante</a></li>
                                <li><a href="#">Inscripciones</a></li>
                                <li><a href="#">Financiamiento y Becas</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="has-submenu">
                        <span>Programas</span>

                        <button class="submenu-toggle" aria-label="Toggle submenu">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"/>
                            </svg>
                        </button>
                        
                        <div class="submenu">
                            <ul>
                                <li><a href="#">Pregrado</a></li>
                                <li><a href="#">Posgrado</a></li>
                                <li><a href="#">Educación Continua</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="has-submenu">
                        <span>Atención y servicios a la comunidad</span>

                        <button class="submenu-toggle" aria-label="Toggle submenu">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"/>
                            </svg>
                        </button>

                        <div class="submenu">
                            <ul>
                                <li><a href="#">PQRSF</a></li>
                                <li><a href="#">Canales de Atención</a></li>
                                <li><a href="https://appcerficados.uanorte.edu.co/" target="_blank" rel="noopener noreferrer">Certificados</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </header>
    </body>
</html>