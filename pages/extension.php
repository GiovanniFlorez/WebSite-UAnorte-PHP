<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="../assets/img/iconUAnorte.png">
        <title>Extensión - UAnorte</title>
        <link rel="stylesheet" href="../assets/css/preloader.css">
        <link rel="stylesheet" href="../assets/css/header.css">
        <link rel="stylesheet" href="../assets/css/footer.css">
        <link rel="stylesheet" href="../assets/css/FAB.css">
        <link rel="stylesheet" href="../assets/css/extension.css">
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

        <!-- =================================================== EXTENSION =================================================== -->
        <section class="extension">
            <!-- =================================================== ROW 1 =================================================== -->
            <div class="columns">
                <div class="columnImg">
                    <img src="../assets/img/extensionPolitica.png" class="imgExtension" alt="imgExtension">
                </div>

                <div class="columnText">
                    <p class="textColors">
                        <span class="blue">
                            La Extensión orienta y dirige las acciones de la Institución Universitaria 
                            tendientes a
                        </span>

                        <span class="orange"> 
                            establecer relaciones interactivas con los sectores sociales, económicos;
                        </span>

                        <span class="blue"> 
                            profesionales e institucionalales y a
                        </span>

                        <span class="orange"> 
                            fomentar actividades complementarias en lo cultural, deportivo; artístico y 
                            recreativo
                        </span>

                        <span class="blue"> 
                            con el propósito de.
                        </span>

                        <span class="orange"> 
                            aportar soluciones de desaroollo social, pontencializar el talento humano y el 
                            uso adecuado de los recursos
                        </span>

                        <span class="blue"> 
                            en la permanente búsqueda del bienestar colectivo de la comunidad de influencia del 
                            Departamento Norte de Santander, en los procesos de desarrollo socia,
                        </span>

                        <span class="orange"> 
                            contribuyendo a la consolidación de la Misión y Visión Institucional
                        </span>
                    </p>
                </div>
            </div>

            <hr>

            <!-- =================================================== ROW 2 =================================================== -->
            <div class="columns">
                <div class="columnText">
                    
                    <h1>Concepción de la Extensión en el PEI</h1>

                    <p>
                        La Corporación Universitaria Autónoma del Norte desarrolla sus procesos de relación con 
                        el sector externo a partir de las políticas de extensión y proyección social, la cual 
                        como función sustantiva reflexiona y actúa sobre el aporte social de la Universidad, 
                        el fortalecimiento institucional y la formación integral en coherencia al horizonte 
                        pedagógico y la construcción de conocimiento , que implica una formación en contexto 
                        facilitando a la Universidad su interacción permanente con el entorno donde el 
                        estudiante y la comunidad educativa aterricen elementos conceptuales, teóricos, 
                        metodológicos y éticos a situaciones propias de su territorio, desde una visión local y 
                        mundial para responder a realidades ya definidas o la cocreación de nuevas propuestas 
                        que resignifiquen paradigmas en función del buen vivir de una sociedad.(PEI,2017)
                    </p>
                </div>

                <div class="columnImg" id="imgRow2">
                    <img src="../assets/img/extensionServiciosExternos.png" class="imgExtension" alt="imgExtension">
                </div>
            </div>

            <!-- =================================================== ROW 3 =================================================== -->
            <h1 class="blueWord">Extensión</h1>
            <hr>

            <div class="columns">
                <div class="columnText">
                    
                    <h1>Modalidades de Extensión</h1>

                    <p>
                    La concepción institucional de extensión permite una integración pertinente desde el 
                    desarrollo humano y responsabilidad social, siendo la extensión una oportunidad de 
                    transcender del ejercicio meramente académico y de producción de conocimiento a una 
                    implicación en la realidad de los individuos que comprenden y construyen una sociedad 
                    en donde se defines los siguientes objetivos: 
                    </p>

                    <span id="puntos">...</span>

                    <br>

                    <div id="textoOculto" class="oculto">
                        <p>
                            <ul>
                                <li class="list">
                                    Promover la interacción permanente con los distintos actores locales y 
                                    nacionales, entre ellos comunidades, empresas, organizaciones sociales, 
                                    entes gubernamentales y gremios profesionales, para discusiones propias de 
                                    la disciplina, el reconocimiento de tendencias de acción profesional, 
                                    retos, necesidades y expectativas de la sociedad.o.
                                </li>

                                <li class="list">
                                    Desarrollar proyectos sociales de cooperación interinstitucional orientados 
                                    al fortalecimiento institucional y el impacto social.
                                </li>

                                <li class="list">
                                    Desarrollar una estrategia de comunicación y vinculación permanente con el 
                                    egresado desde que se constituye como estudiante regular de la Universidad 
                                    garantizando un lazo de confianza después de graduado.
                                </li>

                                <li class="list">
                                    Gestionar la prestación de servicios sociales a la comunidad que permite 
                                    aportar a la solución de problemas locales asociados a las disciplinas y 
                                    que aporten al desarrollo de competencias en los estudiantes y de procesos 
                                    investigativos.
                                </li>
                            </ul>
                        </p>
                    </div>


                    <button id="btnVerMas" onclick="verMas()">Ver más</button>
                </div>

                <div class="columnImg" id="imgRow2">
                    <img src="../assets/img/gestionServicioSocial.png" class="imgExtension" alt="imgExtension">
                </div>
            </div>
        </section>

        <!-- =================================================== LEGAL OFFICE =================================================== -->
        <section class="Legal Office">
            <h1 class="redWord">Consultorio Jurídico</h1>
            <hr>

            <div class="text">
                <p class="textLegalOffice">
                    El Consultorio Jurídico de la Corporación Universitaria Autónoma del Norte – UAnorte es 
                    una unidad académico – administrativa adscrita a la Vicerrectoría Académica, dependiente 
                    de Facultad Ciencias Sociales y Humanas, Departamento de Extensión y Proyección Social 
                    Programa Académico de Derecho. Es un escenario de aprendizaje práctico, en el cual los 
                    estudiantes del programa de Derecho, bajo la supervisión, la guía y la coordinación del 
                    personal docente y administrativo que apoya el ejercicio académico, adquieren 
                    conocimientos y desarrollan competencias, habilidades y valores éticos para el ejercicio 
                    de la profesión de abogado, prestando el servicio obligatorio y gratuito de asistencia 
                    jurídica.
                </p>
            </div>

            <!-- =================================================== MISION AND VISION UANORTE =================================================== -->
            <div class="misionVision">

                <!-- ================================ MISSION ================================ -->
                <div  class="mision">
                    <h1>Misión</h1>

                    <p>
                        El Consultorio Jurídico de la Corporación Universitaria Autónoma del Norte – 
                        UAnorte, presta un servicio jurídico con enfoque social, ético y humano bajo 
                        estándares de calidad y liderazgo, a través de la formación integral de futuros 
                        profesionales de derecho, aportando a sus competencias y resultados de aprendizaje 
                        en el escenario de la práctica jurídica; comprendiendo el asesoramiento, la 
                        representación, la aplicación de mecanismos de resolución de conflictos, el 
                        adelantamiento de actuaciones administrativas e interposición de recursos en ésta 
                        sede y la pedagogía en derechos.
                    </p>
                </div>

                <!-- ================================ VISION ================================ -->
                <div class="vision">
                    <h1>Vision</h1>

                    <p>
                        El Consultorio Jurídico de la Corporación Universitaria Autónoma del Norte – 
                        UAnorte, será reconocido en el primer quinquenio como uno de los más competentes y 
                        diligentes de la región, por la calidad de sus actuaciones, de cara al compromiso 
                        social que por su naturaleza le asiste y como parte fundamental en la búsqueda de 
                        la excelencia, frente a las diferentes acciones encaminadas al reconocimiento y la 
                        reivindicación de derechos.
                    </p>
                </div>
            </div>

            <div class="services">
                <h1>Servicios del Consultorio Jurídico</h1>

                <p>
                    El Consultorio Jurídico de la UAnorte presta servicios de asesoría jurídica, 
                    conciliación extrajudicial en derecho, representación judicial y extrajudicial.
                </p>
            </div>

            <div class="servicesContainer">

                <div class="serviceCard">
                    <img src="../assets/img/derechoPublico.png" alt="Derecho Público">
                    <div class="overlay">
                        <h3>Derecho Público</h3>
                        <span class="goldLine"></span>
                        <p>
                            Esta área es el puente entre el ciudadano y el Estado.
                            Protegemos los derechos fundamentales frente a abusos
                            o fallas de la administración pública.
                        </p>
                    </div>
                </div>

                <div class="serviceCard">
                    <img src="../assets/img/derechoPrivado.png" alt="Derecho Privado">
                    <div class="overlay">
                        <h3>Derecho Privado</h3>
                        <span class="goldLine"></span>
                        <p>
                            Regula las relaciones y acuerdos entre particulares,
                            tanto personas como empresas.
                        </p>
                    </div>
                </div>

                <div class="serviceCard">
                    <img src="../assets/img/derechoLaboral.png" alt="Derecho Laboral">
                    <div class="overlay">
                        <h3>Derecho Laboral</h3>
                        <span class="goldLine"></span>
                        <p>
                            Protege los derechos de los trabajadores y asegura
                            el cumplimiento de las obligaciones de los empleadores.
                        </p>
                    </div>
                </div>

                <div class="serviceCard">
                    <img src="../assets/img/derechoPenal.png" alt="Derecho Penal">
                    <div class="overlay">
                        <h3>Derecho Penal</h3>
                        <span class="goldLine"></span>
                        <p>
                            Se ocupa de las conductas que afectan la seguridad
                            y el orden social, garantizando justicia y debido proceso.
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <section class="Purple Legal Office">
            <div class="purpleLegalOffice">
                <p class="textConsultaReglamentoConsultorioJuridico">Consultorio Jurídico Púrpura</p>
            </div>

            <div class="columns">
                <div class="textPurpleLegalOffice">
                    <h1>¿Qué es el Consultorio Jurídico Púrpura?</h1>

                    <p>
                        El Consultorio Jurídico Púrpura tiene como propósito brindar asesoría y 
                        acompañamiento jurídico gratuito con un enfoque de género. Su misión es promover el 
                        acceso a la justicia de mujeres, niñas, adolescentes y comunidades diversas, 
                        reconociendo las desigualdades históricas y las múltiples formas de violencia que 
                        afectan sus derechos.
                    </p>

                    <p class="darkGrayText">Servicios que Ofrecemos:</p>

                    <p>- Atención preferencial.</p>

                    <p>- Confidencialidad, estricta reserva legal.</p>

                    <p>- Escucha activa.</p>

                    <p>- Acompañamiento.</p>

                    <p class="darkGrayText">Horario de Atención:</p>

                    <p>De lunes a viernes de 8:00 a 11:00m y de 2:00 a 5:00 p.m.</p>

                    <p class="darkGrayText">Dirección</p>

                    <p>Av. 3 número 13-81 Barrio La Playa, San José de Cúcuta, departamento Norte de Santander.</p>

                    <p class="darkGrayText">Correo Electrónico</p>

                    <p>atencionconsultoriojuridico@uanorteies.edu.co</p>
                </div>

                <div class="imgPurpleLegalOffice">
                    <img class="imgPurple" src="../assets/img/purpleLegalOffice.jpeg" alt="Consultorio Jurídico Purpura">
                </div>
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
        <script src="../assets/js/extension.js"></script>
    </body>
</html>