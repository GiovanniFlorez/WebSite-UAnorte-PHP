<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="../assets/img/iconUAnorte.png">
        <title>Ciencia e Innovación - UAnorte</title>
        <link rel="stylesheet" href="../assets/css/preloader.css">
        <link rel="stylesheet" href="../assets/css/header.css">
        <link rel="stylesheet" href="../assets/css/footer.css">
        <link rel="stylesheet" href="../assets/css/FAB.css">
        <link rel="stylesheet" href="../assets/css/cienciaInnovacion.css">
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

<!-- =================================================== SCIENCE AND INNOVATION =================================================== -->
    <!-- ==================================== ROW 1 ==================================== -->
        <div class="columns">
            <div class="columnImg">
                <img src="../assets/img/investigacionUAnorte.png" class="imgInvestigation" alt="imgInvestigation">
            </div>

            <div class="columnText">
                <h1>Modelo de Investigación</h1>

                <div class="textoPrincipal">

                    <p><strong>1. El Impacto en la Comunidad Académica.</strong></p>

                    <p>
                        Nuestro modelo busca empoderar a los actores académicos, permitiéndoles trascender 
                        el aula para:
                    </p>

                    <ul>
                        <li class="list">
                            Desarrollar competencias investigativas: Formar profesionales capaces de 
                            identificar y resolver problemas reales de su contexto.
                        </li>

                        <li class="list">
                            Construir nuevos saberes: Fomentar la producción de conocimiento propio y 
                            relevante.
                        </li>

                        <li class="list">
                            Generar explicaciones fenomenológicas: Comprender a profundidad la realidad 
                            social, natural y humana.
                        </li>
                    </ul>

                    <span id="puntos">...</span>

                    <div id="textoOculto" class="oculto">

                        <p><strong>2. Enfoque y Perspectivas.</strong></p>

                        <p>
                            La investigación se desarrolla bajo una mirada disciplinar e interdisciplinar.
                        </p>

                        <p><strong>3. Líneas de Acción Estratégicas.</strong></p>

                        <p>Nuestra labor investigativa se materializa en cuatro grandes áreas de interés:</p>

                        <table>
                            <tr>
                                <th>Eje Temático</th>
                                <th>Enfoque Principal</th>
                            </tr>
                            <tr>
                                <td>Perspectiva Ontológica</td>
                                <td>El estudio del ser y la fundamentación de cada disciplina.</td>
                            </tr>
                            <tr>
                                <td>Identidad, Cultura y Patrimonio</td>
                                <td>El rescate y fortalecimiento de nuestras raíces y valores.</td>
                            </tr>
                            <tr>
                                <td>Desarrollo, Ambiente y Territorio</td>
                                <td>El equilibrio entre el progreso humano y la sostenibilidad del entorno.</td>
                            </tr>
                            <tr>
                                <td>Convivencia, Paz y Ciudadanía</td>
                                <td>La construcción de una sociedad más justa, armónica y participativa.</td>
                            </tr>
                        </table>

                    </div>
                </div>

                <button id="btnVerMas" onclick="verMas()">Ver más</button>
            </div>
        </div>

        <!-- ==================================== ROW 2 ==================================== -->

        <div class="columns">
            <div class="columnText">
                
                <h1>Política de Investigación Institucional</h1>

                <p>
                    La Política de Investigación de la Corporación Universitaria Autónoma del Norte 
                    -UANORTE orienta y da las directrices para la gestión de investigación, define los 
                    criterios para la planeación, organización, desarrollo, seguimiento y evaluación de 
                    los procesos de investigación de la Institución. Está orientada al cumplimiento de las 
                    labores formativas, académicas, docentes, de investigación y extensión, así como el 
                    logro de los propósitos formativos en cumplimiento de la misión institucional y la 
                    ejecución del Proyecto Educativo Institucional y el horizonte pedagógico bajo criterios 
                    de efectividad, flexibilidad y transparencia. Proyecto Educativo Institucional - PEI. 
                    Corporación Universitaria Autónoma del Norte – UAnorte.
                </p>

                <span id="puntos2">...</span>

                <br>

                <div id="textoOculto2" class="oculto2">
                    <p>
                        En el Proyecto Educativo Institucional - PEI de la Corporación Universitaria 
                        Autónoma del Norte –UANORTE  se conceptualiza la Investigación como una actividad 
                        social e histórica, que busca conocer la realidad social, natural y humana con el 
                        fin de transformarla, lo anterior lleva a realizar procesos de reflexión, críticos 
                        y sistémicos que permiten la generación de conocimiento acorde al contexto local y 
                        mundial, fortaleciendo las comunidades científicas. Estos procesos se convierten en 
                        una estrategia de formación para la investigación de los futuros profesionales en 
                        competencias investigativas pertinentes con las realidades en el marco de los 
                        núcleos problémicos definidos y en permanente reflexión y construcción”.
                    </p>
                </div>


                <button id="btnVerMas2" onclick="verMas2()">Ver más</button>
            </div>

            <div class="columnImg" id="imgRow2">
                <img src="../assets/img/politicaInvestigacionInstitucional.png" class="imgInvestigation" alt="imgInvestigation">
            </div>
        </div>
        
        <!-- ==================================== ROW 3 ==================================== -->
         <div class="columns">
            <div class="columnText">

                <h1>Grupos de Investigación</h1>

                <p>
                    La Vicerrectoría Académica y el Departamento de Investigación, Desarrollo e Innovación 
                    son los que dinamizan la gestión de apoyo a toda la actividad científica, tecnológica 
                    y de innovación con todas las Unidades académicas, administrativas y financieras de la 
                    institución desde los núcleos problémicos institucionales, con el fin de dar respuesta 
                    oportuna y pertinente a las necesidades locales y globales,  al igual que al Sistema 
                    Nacional de Ciencia, Tecnología e Innovación, y las entidades y fuentes de recursos 
                    nacionales e internacionales. 
                </p>

                <span id="puntos3">...</span>

                <br>

                <div id="textoOculto3" class="oculto3">
                    <p>
                        La investigación se considera un componente básico de consolidación de programas y 
                        fundamento de la práctica profesional, por lo tanto, se trata de lograr 
                        concepciones integrales e integradoras que la hagan efectiva en toda su dimensión. 
                        Elemento fundamental en el proceso de formación del profesional de las Ciencias 
                        Sociales y Humanas, el cual tiene como propósito la posibilidad de proyección 
                        hacia el desarrollo local y cualificación de los procesos formativos, articulada a 
                        la docencia y a la extensión.
                    </p>
                </div>


                <button id="btnVerMas3" onclick="verMas3()">Ver más</button>
            </div>

            <div class="columnImg">
                <img src="../assets/img/gruposInvestigacion.png" class="imgInvestigation" alt="imgInvestigation">
            </div>
        </div>

        <!-- ==================================== ROW 3 ==================================== -->
        <div class="columns">
            <div class="columnImg">
                <img src="../assets/img/TRSDERCSM.png" class="imgInvestigation" alt="imgInvestigation">
            </div>

            <div class="columnText">

                <h1>Ruta para los Semilleros de Investigación</h1>

                <div class="miniColums">
                    <div class="miniColumnsImg">
                        <img src="../assets/img/fase1.png" class="imgFase" alt="imgFase1">
                    </div>

                    <div class="miniColumnsText">
                        <h2>Formación de Semillas</h2>

                        <ul>
                            <li class="list2">Actividades de formación en temas investigativos</li>

                            <li class="list2">Reuniones con docentes coordinadores</li>
                        </ul>
                    </div>
                </div>

                <div class="miniColums">
                    <div class="miniColumnsImg">
                        <img src="../assets/img/fase2.png" class="imgFase" alt="imgFase2">
                    </div>

                    <div class="miniColumnsText">
                        <h2>Formulación y Ejecución de Proyectos de Investigación</h2>

                        <ul>
                            <li class="list2">Formulación de proyectos de investigación</li>

                            <li class="list2">Ejecución de proyectos de investigación</li>
                        </ul>
                    </div>
                </div>

                <div class="miniColums">
                    <div class="miniColumnsImg">
                        <img src="../assets/img/fase3.png" class="imgFase" alt="imgFase3">
                    </div>

                    <div class="miniColumnsText">
                        <h2>Participación y Divulgación Eventos Académicos</h2>

                        <ul>
                            <li class="list2">
                                Participación en eventos locales, departamentales, regionales 
                                y nacionales para visibilizar la producción investigativa de los semilleros
                            </li>

                            <li class="list2">
                                Participación en capítulos de libros y documentos académicos de soporte a 
                                las actividades de docencia, investigación y extensión.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

<!-- =================================================== FOOTER =================================================== -->
        <div class="footer">
            <?php include '../includes/footer.php'; ?>
        </div>
<!-- =================================================== SCRIPTS =================================================== -->
        <script src="../assets/js/cienciaInnovacion.js"></script>        
        <script src="../assets/js/header.js"></script>
        <script src="../assets/js/preloader.js"></script>
        <script src="../assets/js/FAB.js"></script>
    </body>
</html>