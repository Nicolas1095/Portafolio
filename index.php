<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="mi nombre es Nicolas galarraga, soy un individuo de mente emprendedora, que disfruta los retos y circunstancias que representa mi trabajo por lo cual soy capaz de desarrollar y personalizar der forma detallista mis proyectos.
                    tengo basta experiencia en el desarollo web en areas como HTML, CSS3, JavaScript, PHP, Python, Laravel y Django asi que si deseas desarrollar tu negocio contactame y podras adquirir la presencia en linea que tu negocio necesita
    <meta name="keywords" content="HTML, CSS, JavaScript, paginas web, realizo paginas web, creacion de paginas web, PHP, Laravel 8, Laravel, composer, python, django">
    <meta name="author" content="Nicolas Galarraga">
    <title>Portafólio</title>
    <script src="https://kit.fontawesome.com/f7cea812e2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/syles.css">
</head>

<body>
    <header id="inicio">
        <div class="header-content">
            <div class="menu">
                <nav>
                    <ul>
                        <a href="#">
                            <li>Inicio</li>
                        </a>
                        <a href="#aboutMe">
                            <li>Sobre Mi</li>
                        </a>
                        <a href="#proyectos">
                            <li>Proyectos</li>
                        </a>
                        <a href="#habilidades">
                            <li>Habilidades</li>
                        </a>
                        <a href="#contacto">
                            <li>Contacto</li>
                        </a>
                    </ul>
                </nav>
            </div>
            <div class="menu-icon"><i class="fas fa-bars"></i></div>
    </header>
    <div class="video">
    </div>
    <video class="vid" muted src="video/pexels-mikhail-nilov-7534244.mp4" autoplay loop></video>
    <div class="presentacion">
        <h2>Nicolas Galarraga</h2>
        <hr id="barra" color="#F26202" style="transform: translateX(-50%); left: 50%;position: relative;animation-name: barra;
    animation-duration: 4s; width: 30vw">
        <h3>Desarrollador FullStack</h3>
        <a href="#aboutMe">Sobre Mi <i class="fas fa-chevron-down"></i></a>
    </div>
    <div class="ctn-all">

        <div class="content-all">
            <div id="aboutMe" class="aboutMe">
                <h2>Conoceme</h2>
                <p>Soy un individuo de mente emprendedora, que disfruta los retos y circunstancias que representa mi trabajo por lo cual soy capaz de desarrollar y personalizar der forma detallista mis proyectos.
                    tengo basta experiencia en el desarrollo web en areas como HTML, CSS3, JavaScript, PHP, Python, Laravel y Django asi que si deseas desarrollar tu negocio <a href="#contacto"><b>Contactame</b></a> y podras adquirir tu propia identidad la cual tu empresa nesecita
                </p>
            </div>
            <div class="container__proyects">
                <h2>Certificaciones</h2>
                <div class="container__card" id="proyectos">
                    <div class="card c1">
                        <div class="icon">
                            <img src="img/PHP_certificate.jpg" alt="">
                        </div>
                        <div class="info__description">
                            <h3>Certificacion PHP Course SoloLearn</h3>
                        </div>
                    </div>  
                    <div class="card c2">
                        <div class="icon">
                            <img src="img/JavaScript_certificate.jpg" alt="">
                        </div>
                        <div class="info__description">
                            <h3>Certificacion JavaScript Course SoloLearn</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 100px;" class="container__proyects">
                <h2>Proyectos</h2>
                <div class="container__card" id="proyectos">
                    <div class="card c1">
                        <div class="icon">
                            <img src="img/proyectos/senicort.jpeg" alt="">
                        </div>
                        <div class="info__description">
                            <h3>Senicort</h3>
                            <a href="https://senicort.in" target="_blank">Ver pagina</a>
                            <a href="https://github.com/Nicolas1095/Senicort" target="_blank">Ver en github</a>
                        </div>
                    </div>  
                </div>
            </div>

        </div>
        <h2 class="skillset-text" id="habilidades">Tengo experiencia en tecnologias como:</h2>
        <div class="skillset" id="habilidades">
            <div data-title="Html" class="img_skill">
                <img src="img/html.png" alt="">
            </div>
            <div data-title="PHP" class="img_skill">
                <img src="img/PHP.png" alt="">
            </div>
            <div data-title="JavaScript" class="img_skill">
                <img src="img/JS.png" alt="">
            </div>
            <div data-title="CSS" class="img_skill">
                <img src="img/CSS.png" alt="">
            </div>
            <div data-title="Photoshop" class="img_skill">
                <img src="img/photoshop.png" alt="">
            </div>
            <div data-title="Illustrator" class="img_skill">
                <img src="img/illustrator.png" alt="">
            </div>
            <div data-title="Python" class="img_skill">
                <img src="img/python.png" alt="">
            </div>
            <div data-title="Laravel" class="img_skill">
                <img src="img/laravel.png" alt="">
            </div>
            <div data-title="MySQL" class="img_skill">
                <img src="img/mysql.png" alt="">
            </div>
            <div data-title="Adobe XD" class="img_skill">
                <img src="img/xd.png" alt="">
            </div>
            <div data-title="Bootstrap" class="img_skill">
                <img src="img/bootstrap.png" alt="">
            </div>
        </div>
    </div>
    </div>
    <footer>
        <div id="contacto" class="footer_content">
            <h2>Contacto</h2>
            <div class="contacto">
                <div class="form">
                    <form method="post">
                        <label for="name">Nombre:</label>
                        <input type="text" name="name" id="name">
                        <label for="phone">Numero de telefono:</label>
                        <input type="num" name="phone" id="phone">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email">
                        <label for="mensaje">Mensaje:</label>
                        <textarea name="mensaje" id="mensaje" rows="10"></textarea>
                        <button type="submit" name="enviar">Enviar</button>
                    </form>
                    <?php
                    include "enviar.php";
                    echo $alert;
                    ?>
                </div>
            </div>
            <a href="https://m.me/nicolas.galarraga.5891"><i class="fab fa-facebook-messenger"></i></a>
            <a href="https://www.linkedin.com/in/nicolas-galarraga/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://t.me/NicolasGalarraga" target="_blank"><i class="fab fa-telegram-plane"></i></a>
        </div>
    </footer>
    <script language="JavaScript" src="js/jquery.js" type="text/javascript"></script>
    <script language="JavaScript" src="js/script.js" type="text/javascript"></script>
</body>

</html>