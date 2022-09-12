<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schottler & Asociados</title>
     <!--Recursos-->
     <link rel="stylesheet" href="css/Style.css">
     <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <!--Desplazamineto por diviciones-->
    <header class="header" id="inicio">
        <img class="men" src="img/Menu.svg" alt="">
        <nav class="menu-navegacion">
                <a href="#inicio">Inicio</a>
                <a href="#servicio">Servicio</a>
                <a href="#portafolio">Portafolio</a>
                <a href="#expertos">Especializados</a>
                <a href="#footer">Contacto</a>
                <a href="./index.php">Iniciar Sesion</a>
        </nav>
        <!--contenedor principal-->
        <div class="contenedor head">
            <h1 class="titulo">Schottler & Asociados</h1>
            <p class="copy">Somos expertos en la creación de tus sueños</p>
        </div>
    </header>
    <!--Contenedor principal main-->
    <main>
        <!--Servicios-->
            <section class="services contenedor" id="servicio">
                <h2 class="subtitulo">Nuestros servicio</h2>
                <div class="contenedor-servicio">
                    <img src="img/Dise.svg" alt="">
                    <div class="checklist-servicio">
                        <div class="service">
                            <h3 class="n-service"><span class="number">1</span>DISEÑO ARQUIECTONICO</h3>
                            <p> Diseño de planos y plafinicacion de ideas</p>
                        </div>
                        <div class="service">
                            <h3 class="n-service"><span class="number">2</span>PLANIFICACION</h3>
                            <p> Examinacion y ejecucion de ideas de diseño</p>
                        </div>
                        <div class="service">
                            <h3 class="n-service"><span class="number">3</span>VIZUALIZACION</h3>
                            <p> Supervicion y manejo del proyectos</p>
                        </div>
                        <div class="service">
                            <h3 class="n-service"><span class="number">4</span>EJECUCION DE PROYECTOS</h3>
                            <p> Ejecucion y finalizacion de proyectos</p>
                        </div>
                    </div>
                </div>
            </section>
            <!--Galeria-->
            <section class="gallery" id="portafolio">
                <div class="contenedor">
                    <h2 class="subtitulo">Galeria</h2>
                    <div class="contenedor-portafolio">
                    <a class="cone" href="./proyectos/casa1.php"><img src="img/casa1/cm1.jpg" class="img-p" alt="Hola"></a>
                    <a class="cone" href="./proyectos/casa2.php"><img src="img/casa2/casa2.jpg" class="img-p" alt=""></a>
                    <a class="cone" href="./proyectos/casa3.php"><img src="img/casa3/casa3.jpg" class="img-p" alt=""></a>
                    <a class="cone" href="./proyectos/casa4.php"><img src="img/casa4/casa4 (1).jpg" class="img-p" alt=""></a>
                    <a class="cone" href="./proyectos/casa5.php"><img src="img/casa5/casa5 (1).jpg" class="img-p" alt=""></a>
                    <a class="cone" href="./proyectos/casa6.php"><img src="img/casa6/casa6.jpg" class="img-p" alt=""></a>
                    <a class="cone" href="./proyectos/casa7.php"><img src="img/casa7/casa7 (1).jpg" class="img-p" alt=""></a>
                    <a class="cone" href="./proyectos/casa8.php"><img src="img/casa8/casa8 (1).jpg" class="img-p" alt=""></a>
                    </div>
                </div>
            </section>

            <section class="contenedor" id="expertos">
                <h2 class="subtitulo">Expertos en:</h2>
                <section class="experts">
                    <div class="cont-expert">
                        <img src="img/disearqui.svg" alt="">
                        <h3 class="n-expert">DISEÑO ARQUIECTONICO</h3>
                    </div>
                    <div class="cont-expert">
                        <img src="img/plani.svg" alt="">
                        <h3 class="n-expert">PLANIFICACION</h3>
                    </div>
                    <div class="cont-expert">
                        <img src="img/visua.svg" alt="">
                        <h3 class="n-expert">VIZUALIZACION</h3>
                    </div>
                    <div class="cont-expert">
                        <img src="img/ejecu.svg" alt="">
                        <h3 class="n-expert">EJECUCION DE PROYECTOS</h3>
                    </div>
                </section>
            </section>
    </main>

    <footer id="footer">
        <div class="contenedor footer-content">
                <div class="contact-us">
                    <h2 class="brand">Schottler & Asociados</h2>
                    <p>Somos expertos en la creación de tus sueños</p>
                </div>
                <div class="social-media">
                    <a href="https://www.facebook.com/profile.php?id=100063726575812" class="social-media-icon">
                        <i class='bx bxl-facebook'></i>
                    </a>
                    <a href="https://goo.gl/maps/1eLwZgwv8L478izQ6" class="social-media-icon">
                        <i class='bx bxs-map-pin'></i>
                    </a>
                    <a href="https://instagram.com/schottler_arq?igshid=YmMyMTA2M2Y=" class="social-media-icon">
                        <i class='bx bxl-instagram' ></i>
                    </a>
                </div>
        </div>
        <div class="line"></div>
    </footer>
    <!--conexion a los script-->
    <script src="js/menu.js"></script>
    <script src="js/lightbox.js"></script>
</body>
</html>