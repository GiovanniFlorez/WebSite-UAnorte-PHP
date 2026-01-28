<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PQRSF - UAnorte</title>
        <link rel="icon" type="image/png" href="../assets/img/iconUAnorte.png">
        <link rel="stylesheet" href="../assets/css/preloader.css">
        <link rel="stylesheet" href="../assets/css/header.css">
        <link rel="stylesheet" href="../assets/css/footer.css">
        <link rel="stylesheet" href="../assets/css/FAB.css">
        <link rel="stylesheet" href="../assets/css/PQRSF.css">
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

<!-- =================================================== TEXT =================================================== -->
        <div class="text">

        <!-- ================================ REQUESTS ================================ -->
            <div class="card">
                <h3>P - Peticiones</h3>

                <p>
                    Son las solicitudes formales que cualquier persona puede presentar a la institución, 
                    de manera respetuosa, para requerir información, realizar consultas o solicitar actuaciones 
                    relacionadas con asuntos de interés general o particular que sean competencia de la 
                    universidad, esperando una respuesta oportuna y de fondo.
                </p>
            </div>

        <!-- ================================ COMPLAINTS ================================ -->
            <div class="card">
                <h3>Q - Quejas</h3>

                <p>
                    Corresponden a las manifestaciones de inconformidad o descontento que realiza una persona 
                    frente a comportamientos, acciones u omisiones que considera inadecuadas o irregulares por 
                    parte de funcionarios, contratistas o colaboradores de la institución en el ejercicio de sus 
                    funciones.
                </p>
            </div>

        <!-- ================================ CLAIMS ================================ -->
            <div class="card">
                <h3>R - Reclamos</h3>

                <p>
                    Son las solicitudes mediante las cuales una persona exige la corrección o solución de una 
                    situación relacionada con la prestación deficiente de un servicio, el incumplimiento de un 
                    procedimiento o la falta de atención oportuna a una solicitud por parte de la institución.
                </p>
            </div>

        <!-- ================================ SUGGESTIONS ================================ -->
            <div class="card">
                <h3>S - Sugerencias</h3>

                <p>
                    Son las propuestas, ideas u observaciones que presentan los usuarios con el fin de aportar 
                    a la mejora continua de los servicios, procesos o la gestión institucional de la universidad.
                </p>
            </div>

        <!-- ================================ CONGRATULATIONS ================================ -->
            <div class="card">
                <h3>F - Felicitaciones</h3>

                <p>
                    Son las expresiones de reconocimiento, agradecimiento o satisfacción que realizan los 
                    usuarios por la calidad del servicio recibido, la atención brindada o la adecuada gestión 
                    desarrollada por la institución o alguno de sus colaboradores.
                </p>
            </div>
        </div>

        <hr style="margin-top: 5%;">

<!-- =================================================== FORM PQRSF =================================================== -->
        <div class="formulario">
            <h1>Formulario PQRSF</h1>

            <form>
                <div class="divFormulario">
                    <div class="formularioDeInscripcion">
                        <div class="columna3">
                            <p class="pFormularioContacto">Nombre:</p>
                            <input type="text" name="nombre" placeholder="Nombre" required>

                            <p class="pFormularioContacto">Tipo de Identidad:</p>
                            <select name="tipoDocumento" required>
                                <option value="">Seleccione un Tipo de Documento</option>

                                <option value="Cédula de Ciudadanía">Cédula de Ciudadanía</option>

                                <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>

                                <option value="Registro Civil de Nacimiento">Registro Civil de Nacimiento</option>

                                <option value="Cédula de Extrangería">Cédula de Extrangería</option>

                                <option value="Pasaporte">Pasaporte</option>

                                <option value="Otro">Otro</option>
                            </select>

                            <p class="pFormularioContacto">Correo Electrónico:</p>
                            <input type="email" name="email" placeholder="Correo Electrónico" required>

                            <p class="pFormularioContacto">Cargo:</p>
                            <select name="cargo" required>
                                <option value="">Seleccione un Cargo</option>

                                <option value="Estudiante">Estudiante</option>

                                <option value="Docente">Docente</option>

                                <option value="Administrativo">Administrativo</option>

                                <option value="Otro">Otro</option>
                            </select>
                        </div>

                        <div class="columna3">
                            <p class="pFormularioContacto">Apellido:</p>
                            <input type="text" name="apellido" placeholder="Apellido" required>

                            <p class="pFormularioContacto">Número de Documento de Identidad:</p>
                            <input type="tel" name="documento" min="0" placeholder="Número de identidad" required>

                            <p class="pFormularioContacto">Teléfono:</p>
                            <input type="tel" min="0" name="telefono" placeholder="Número de teléfono" required>
                                    
                            <p class="pFormularioContacto">Tipo de PQRSF:</p>
                            <select name="selectCarreraInteres" required>
                                <option value="">Seleccione un Tipo de PQRSF</option>

                                <option value="Peticiones">Peticiones</option>

                                <option value="Quejas">Quejas</option>

                                <option value="Reclamos">Reclamos</option>

                                <option value="Sugerencias">Sugerencias</option>

                                <option value="Felicitaciones">Felicitaciones</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="divDescripcion">
                        <hr class="">
                            
                        <p class="pFormularioContacto">Descripción:</p>
                        <textarea name="descripcion" placeholder="Descripción" required></textarea>
                        
                        <hr class="">
                        <div class="subirArchivos">     
                            <p class="pFormularioContacto">Subir Archivos:</p>
                            <input type="file" name="archivo">
                        </div>

                        <hr>
                            
                        <div class="divTextFormulario">
                            <div class="checkbox-container">
                                <label class="textoFormulario">
                                    <input type="checkbox" id="checkboxAcepto"> Acepto
                                </label>
                            </div>

                            <p class="textoFormulario">
                            El Sistema PQRS, es un formulario en el que podrá interponer peticiones, quejas, reclamos 
                            y sugerencias donde podrá expresar su opinión de los procesos y servicios que brinda la 
                            Corporación Universitaria Autónoma del Norte. En cumplimiento de la Ley 1581 de 2012 y 
                            sus decretos reglamentarios en calidad de titular(es) de la información de manera libre, 
                            expresa e informada, autorizo a la CORPORACION UNIVERSITARIA AUTONOMA DEL NORTE – UAnorte 
                            y/o a la persona natural o jurídica a quien este encargue, a recolectar, almacenar, utilizar, 
                            circular, suprimir y en general, a usar mis datos personales para el cumplimiento de las 
                            siguientes finalidades: a. Gestión de PQR, b. Publicidad y Prospección Comercial, c. Enseñanza 
                            Universitaria o Superior. Declaro que he conocido la Política de tratamiento de datos personales.
                            </p>

                            <p class="textoFormulario">Gracias por tu opinión.</p>
                        </div>
                            
                        <hr class="">
                            
                        <button class="botonEnviar" id="botonEnviar" disabled>ENVIAR</button>
                        <hr class="hrFormularioContacto">
                    </div>
                </div>
            </form>
        </div>    

<!-- =================================================== FOOTER =================================================== -->
        <div class="footer">
            <?php include '../includes/footer.php'; ?>
        </div>
<!-- =================================================== SCRIPTS =================================================== -->
        <script src="../assets/js/header.js"></script>
        <script src="../assets/js/preloader.js"></script>
        <script src="../assets/js/FAB.js"></script>
        <script src="../assets/js/jsCheckBox.js"></script>
    </body>
</html>