<?php
$pg="sobre-mi";
?>
<!DOCTYPE html>
<html lang="ES">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mí</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link       href "https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body id="sobre-mi">
    <?php include_once "header.php"; ?>
    <main>
        <div class="container">    
            <div class="row">
                <div class="col-12 col-sm-6 pb-5">
                    <h1 class="col-12 pt-4 pb-3">Sobre mí</h1>
                    <P class="pb-5">Soy estudiante de programacion Full Stack en DePc Suite. Disfruto aprendiendo e investigando, poniendome objetivos y buscando soluciones para lograrlos.</P>
                    <a href="https://api.whatsapp.com/send?phone=542213141725" class="btn btn-rojo">Enviar mensaje</a>
                </div>
                <div class="col-12 col-sm-6 imagenlu">
                    <div><img src="images/luli-listo.jpg" alt="" class="rounded-circle ms-5 mt-2 borde" width="300px"></div>
                </div>
            </div>
        </div>
        <section id="stack" class="color-gradiente">
            <div class="container">
                <div class="row">
                    <div class="col-12 pt-5 pb-4">
                        <h2>Stack Tecnologico</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-6 p-1">
                        <div class="text-center m-1 cuadrado py-3">
                            <p class="pt-4">Javascrit</p>
                            <img src="images/logojavascript.png" alt="" width="60px" class=" pb-4">
                        </div>
                    </div> 
                    <div class="col-sm-2 col-6 p-1">
                        <div class="text-center m-1 cuadrado py-3">
                            <p class="pt-4">PHP</p>
                            <img src="images/php_icon.png" alt="" width="60px" class=" pb-4">
                        </div>
                    </div> 
                    <div class="col-sm-2 col-6 p-1">
                        <div class="text-center m-1 cuadrado py-3">
                            <p class="pt-4">HTML5</p>
                            <img src="images/html5-logo-31813.png" alt="" width="60px" class=" pb-4">
                        </div>
                    </div>                    
                    <div class="col-sm-2 col-6 p-1">
                        <div class="text-center m-1 cuadrado py-3">
                            <p class="pt-4">React.js</p>
                            <img src="images/js_react js_logo_react_react native_icon.png" alt="" width="60px" class=" pb-4">
                        </div>
                    </div>                   
                    <div class="col-sm-2 col-6 p-1">
                        <div class="text-center m-1 cuadrado py-3">
                            <p class="pt-4">jQuery</p>
                            <img src="images/jquery_icon.png" alt="" width="60px" class=" pb-4">
                        </div>
                    </div>                  
                    <div class="col-sm-2 col-6 p-1">
                        <div class="text-center m-1 cuadrado py-3">
                            <p class="pt-4">Bootstrap</p>
                            <img src="images/bootstrap_icon.png" alt="" width="60px" class=" pb-4">
                        </div>
                    </div> 
                </div>
                <div class="row pb-5">
                    <div class="col-sm-2 col-6 p-1">
                        <div class="text-center m-1 cuadrado py-3">
                            <p class="pt-4">Laravel</p>
                            <img src="images/logo-laravel_logo_logos_icon.png" alt="" width="60px" class=" pb-4">
                        </div>
                    </div> 
                    <div class="col-sm-2 col-6 p-1">
                        <div class="text-center m-1 cuadrado py-3">
                            <p class="pt-4">My SQL</p>
                            <img src="images/MySQLmariadb.png" alt="" width="98px" class=" pb-4">
                        </div>
                    </div> 
                    <div class="col-sm-2 col-6 p-1">
                        <div class="text-center m-1 cuadrado py-3">
                            <p class="pt-4">CSS</p>
                            <img src="images/css3_achievement_award_icon.png" alt="" width="60px" class=" pb-4">
                        </div>
                    </div>                    
                    <div class="col-sm-2 col-6 p-1">
                        <div class="text-center m-1 cuadrado py-3">
                            <p class="pt-4">Git</p>
                            <img src="images/git_social media_icon.png" alt="" width="60px" class=" pb-4">
                        </div>
                    </div>                   
                    <div class="col-sm-2 col-6 p-1">
                        <div class="text-center m-1 cuadrado py-3">
                            <p class="pt-4">Apache</p>
                            <img src="images/logoapache.png" alt="" width="147px" class=" pb-4">
                        </div>
                    </div>                  
                    <div class="col-sm-2 col-6 p-1">
                        <div class="text-center m-1 cuadrado py-3">
                            <p class="pt-4">Mercado Pago</p>
                            <img src="images/mercado-pago-48.png" alt="" width="60px" class=" pb-4">
                        </div>
                    </div>                   
                </div>
            </div>
        </section>
        

        <section id="experiencia">
            <div class="container">
                <div class="row">
                    <div class="col-12 pt-5 pb-4">
                        <h2><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-briefcase-fill" viewBox="0 0 16 16">
  <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z"/>
</svg>  Experiencia laboral</h2>
                    </div>
                </div>
            </div>
            <div class="container shadow">
                <div class="row pt-3 pb-5">
                    <div class="col-4 pt-4">
                        <img src="images/chicken_animal_4448.png" alt="" width="120px">
                    </div>
                    <div class="col-8">
                        <p class="puesto">Empleada</p>
                        <p class="empresa">Pollajeria Pollote</p>
                        <p class="tiempo">2015-presente</p>
                        <p>Trabajo en el area de atencion al cliente, atendiendo y encargandome de la caja y la administracion. Ademas, me encargo de la limpieza y la produccion de los alimentos. </p>
                    </div>
                </div>
                <div class="row pb-5">
                <div class="col-4 pt-4">
                        <img src="images/sin-logo.png" alt="" width="120px">
                    </div>
                    <div class="col-8">
                        <p class="puesto">Fundadora</p>
                        <p class="empresa">B&M Hamburguesas veganas</p>
                        <p class="tiempo">sept 2020- sept 2021</p>
                        <p>Emprendimiento creado por mi. Produccion de alimentos, atencion al cliente, administración. Manejo de redes sociales y creacion de contenido para las mismas. </p>
                    </div>
                </div>
                <div class="row pb-5">
                <div class="col-4 pt-4">
                        <img src="images/sin-logo.png" alt="" width="120px">
                    </div>
                    <div class="col-8">
                        <p class="puesto">Relleno</p>
                        <p class="empresa">Relleno</p>
                        <p class="tiempo">relleno-relleno</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolore architecto commodi quo autem quos nam consequatur deleniti obcaecati perspiciatis, officia ratione ducimus soluta fuga, accusamus repudiandae provident in laborum?</p>
                    </div>
                </div>
            </div>

        </section>
        
        <section id="formacion">
        <div class="container">
                <div class="row">
                    <div class="col-12 pt-5 pb-4">
                        <h2><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
  <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z"/>
  <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z"/>
</svg> Formación académica</h2>
                    </div>
                </div>
            </div>
            <div class="container shadow">
                <div class="row pt-1 pb-1">
                    <div class="col-12 col-sm-6 pt-4">
                        <div class="row">
                            <div class="col-4">
                                <img src="images/sin-logo.png" alt="" width="100px">
                            </div>
                            <div class="col-8">
                                <p class="puesto">Bachillerato en Ciencias Sociales</p>
                                <p class="inst">Colegio Mercedes Pacheco</p>
                                <p class="tiempo">2011 - 2017</p>
                                <p>https://mercedespacheco.com.ar</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 pt-4">
                        <div class="row">
                            <div class="col-4">
                                <img src="images/sin-logo.png" alt="" width="100px">
                            </div>
                            <div class="col-8">
                                <p class="puesto">Tecnico en Practicas Cardiologicas</p>
                                <p class="inst">Universidad Nacional de La Plata</p>
                                <p class="tiempo">feb 2020 - actualidad</p>
                                <p>Cursadas aprobadas 10 de 16
                                http://www.med.unlp.edu.ar/
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-12 col-sm-6 pt-4">
                        <div class="row">
                            <div class="col-4">
                                <img src="images/sin-logo.png" alt="" width="100px">
                            </div>
                            <div class="col-8">
                                <p class="puesto">Relleno</p>
                                <p class="inst">Relleno Relleno de Relleno</p>
                                <p class="tiempo">Relleno - Relleno</p>
                                <p>https://relleno.relleno.ar</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="profesional">
            <div class="container">
                <div class="row">
                    <div class="col-12 pt-5 pb-4">
                        <h2><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
  <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z"/>
  <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z"/>
</svg> Cursos de desarrollo profesional</h2>
                    </div>
                </div>
            </div>
            <div class="container shadow">
                <div class="row pt-1 pb-1">
                    <div class="col-12 col-sm-6 pt-4">
                        <div class="row">
                            <div class="col-4">
                                <img src="images/depcsuite.png" alt="" width="80px">
                            </div>
                            <div class="col-8">
                                <p class="puesto">Programación Full Stack</p>
                                <p class="inst">DePC Suite</p>
                                <p class="tiempo">nov 2021 - actualidad</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 pt-4">
                        <div class="row">
                            <div class="col-4">
                                <img src="images/sin-logo.png" alt="" width="80px">
                            </div>
                            <div class="col-8">
                                <p class="puesto">Relleno</p>
                                <p class="inst">Relleno relleno</p>
                                <p class="tiempo">Expedición: relleno</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-12 col-sm-6 pt-4">
                        <div class="row">
                            <div class="col-4">
                                <img src="images/sin-logo.png" alt="" width="80px">
                            </div>
                            <div class="col-8">
                                <p class="puesto">Relleno</p>
                                <p class="inst">Relleno Relleno de Relleno</p>
                                <p class="tiempo">Expedición: relleno</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 pt-4">
                        <div class="row">
                            <div class="col-4">
                                <img src="images/sin-logo.png" alt="" width="80px">
                            </div>
                            <div class="col-8">
                                <p class="puesto">Relleno</p>
                                <p class="inst">Relleno relleno</p>
                                <p class="tiempo">Expedición: relleno</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section id="idiomas">
            <div class="container my-5">
                <div class="row">
                    <div class="col-12 col-sm-6 pt-5 pb-5">
                        <div class="row ms-3">
                            <div class="col-4 violeta">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-chat-left-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
</svg>
                            </div>
                            <div class="col-8 idiho shadow">
                                <p class="puesto ms-5 mt-5">IDIOMAS</p>
                                <p class="ms-5 mt-2 mb-1">ESPAÑOL - Nativo</p>
                                <p class="ms-5">INGLÉS - Básico</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 pt-5 pb-5">
                        <div class="row">
                            <div class="col-4 violeta">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>
                            </div>
                            <div class="col-8 idiho shadow">
                                <p class="puesto ms-5 mt-5">HOBBIES</p>
                                <p class="ms-5 mt-2">Hacer música</p>
                            </div>
                    </div>
                </div>
            </div>
        </section>

    <main>
    <footer class="container mb-3">
        <div class="row">
            <div class="col-12 col-sm-3 text-center text-sm-start">
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/luciana-bunter-97779a218/" target="_blank" title="Linkedin"><i
                    class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3 text-center text-sm-start">Sponsor <a href="https://depcsuite.com" target="_blank">DePC Suite</a></div>
            <div class="col-12 col-sm-3 text-center text-sm-start"><a href="to:luulibunter@gmail.com">luulibunter@gmail.com</a></div>
        </div>
    </footer>
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=542213141725" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
    </div>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>