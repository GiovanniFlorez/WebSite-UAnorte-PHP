<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="../assets/img/iconUAnorte.png">
        <title>Información - UAnorte</title>
        <link rel="stylesheet" href="../assets/css/preloader.css">
        <link rel="stylesheet" href="../assets/css/header.css">
        <link rel="stylesheet" href="../assets/css/footer.css">
        <link rel="stylesheet" href="../assets/css/FAB.css">
        <link rel="stylesheet" href="../assets/css/informacion.css">
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
        
        <!-- ========================================== CONTENIDO ========================================== -->
        <div class="inscripcion">
            <div class="imgInscripcion">
                <img class="img1Inscripción" src="https://uanorte.edu.co/web/wp-content/uploads/2024/09/60.png" alt="">

                <a href="https://site2.q10.com/Preinscripcion?aplentId=ccfdab40-6d54-4719-a89c-e85a6c812a14" target="_blank" rel="noopener noreferrer">
                    <img class="imgLinkInscripcion" src="https://uanorte.edu.co/web/wp-content/uploads/2024/09/Botones-Pagina-Web-4-e1726614944147.png" alt="">
                </a>
            </div>
            
            <div>
                <div class="tituloFormularioContacto">
                    Contáctanos para más información
                </div>
                
                <form method="POST">

                    <div class="formularioContacto">
                        <div class="columna3">
                        <p class="pFormularioContacto">Nombres y Apellidos</p>
                        <input type="text" name="nombre" placeholder="Nombres y Apellidos" required>
                            
                        <p class="pFormularioContacto">Correo Electrónico</p>
                        <input type="email" name="email" placeholder="Correo Electrónico" required>
                            
                        <p class="pFormularioContacto">Asunto</p>
                        <input type="text" name="asunto" placeholder="Asunto" required>
                            
                        <p class="pFormularioContacto">Carrera de Interés</p>
                        <select name="carrera" required>
                            <option value="">Seleccione una opción</option>
                            <option value="Pregrado en Derecho">Pregrado en Derecho</option>
                            <option value="Pregrado en Trabajo Social">Pregrado en Trabajo Social</option>
                            <option value="Pregrado en Psicología">Pregrado en Psicología</option>
                            <option value="Pregrado en Comunicación">Pregrado en Comunicación</option>
                            <option value="Posgrado en Intervención Comunitaria">Posgrado en Intervención Comunitaria</option>
                            <option value="Posgrado en Derecho Administrativo">Posgrado en Derecho Administrativo</option>
                            <option value="Cursos y Diplomados">Cursos y Diplomados</option>
                        </select>
                        </div>

                        <div class="columna3">
                        <p class="pFormularioContacto">Número de Documento de Identidad:</p>
                        <input type="tel" min="0" name="documento" placeholder="Número de identidad" required>
                            
                        <p class="pFormularioContacto">Teléfono:</p>
                        <input type="tel" name="telefono" placeholder="Número de teléfono" required>
                            
                        <p class="pFormularioContacto">Descripción:</p>
                        <textarea name="descripcion" placeholder="Descripción" required></textarea>
                        </div>
                    </div>
                        
                    <hr class="hrFormularioContacto">
                        
                    <div class="checkbox-container">
                        <label class="textoFormulario">
                        <input type="checkbox" id="checkboxAcepto" name="acepto" required> Acepto
                        </label>
                    </div>

                    <p class="textoFormulario">
                        En cumplimiento de la Ley 1581 de 2012 y sus decretos reglamentarios, 
                        en calidad de titular(es) de la información de manera libre, expresa e 
                        informada, autorizo a la CORPORACION UNIVERSITARIA AUTONOMA DEL NORTE 
                        y/o a la persona natural o jurídica a quien este encargue a recolectar, 
                        almacenar, utilizar, circular, suprimir y en general, a usar mis datos 
                        personales. Declaro que he conocido la Política de tratamiento de datos 
                        personales.
                    </p>
                        
                    <p class="textoFormulario">Gracias por tu opinión.</p>
                        
                    <hr class="hrFormularioContacto">
                        
                    <button class="botonEnviar" id="botonEnviar" disabled>ENVIAR</button>

                    <hr class="hrFormularioContacto">
                    </form>  
                                
            </div>

        </div>

        <!-- ========================================== FOOTER ========================================== -->
        <div class="footer">
            <?php include '../includes/footer.php'; ?>
        </div>

        <!-- ========================================== SCRIPTS ========================================== -->
        <script src="../assets/js/header.js"></script>
        <script src="../assets/js/preloader.js"></script>
        <script src="../assets/js/FAB.js"></script>
        <script src="../assets/js/jsCheckBox.js"></script>
    </body>
</html>