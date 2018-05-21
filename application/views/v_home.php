<!DOCTYPE html> 
<html>
    <head>
    	<meta charset="ISO-8859-1">
        <meta http-equiv="X-UA-Compatible"  content="IE=edge">
        <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <meta name="description"            content="Proyecto de desarrollo de un producto wizard online que tenga un quiz y con una unica solucion que es SAP Business One">
        <meta name="keywords"               content="Latin American Travel">
        <meta name="robots"                 content="Index,Follow">
        <meta name="date"                   content="May 18, 2018"/>
        <meta name="language"               content="es">
        <meta name="theme-color"            content="#000000">
    	<title>Latin American Travel</title>
        <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/logo_favicon.png">
    	<link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>roboto.css?v=<?php echo time();?>">
    	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>animate.css?v=<?php echo time();?>">
    	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
    	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>index.css?v=<?php echo time();?>">
    </head>
    <body>
        <div id="home">
            <div class="header">
                <div class="container text-right">
                    <div class="redes-header">
                        <ul>
                            <li class="border"><a href="tel:+51986628089"><i class="fa fa-whatsapp same m-r-10"></i>986 628 089</a></li>
                            <li class="border"><a href="tel:+16405055"><i class="fa fa-phone same m-r-10"></i>(01) 640 5055</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button id="nav-icon3" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand logo" href="index.html"><img src="public/img/logo.png"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="" class="link">Paquetes</a></li>
                            <li><a href="" class="link">Ofertas</a></li>
                            <li><a href="" class="link">Escr&iacute;benos</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <section id="principal">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="imagen one"></div>
                        <div class="cont-carousel">
                            <h2>Vive Comunicado</h2>
                            <a href="#comunicacion" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect link-section">Conoce m&aacute;s</a>
                        </div>
                    </div>
                    <div class="item">
                        <!-- <div class="imagen two"></div> -->
                        <video id="video-home" src="public/video/comunicado.mp4" autoplay></video>
                        <div class="cont-carousel">
                            <h2>Encuentra tu curso</h2>
                            <a href="#horario" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect link-section">Conoce m&aacute;s</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="imagen three"></div>
                        <div class="cont-carousel">
                           <h2>Prueba tu ingl&eacute;s</h2>
                           <a href="#prueba" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect link-section">Conoce m&aacute;s</a>
                       </div>
                    </div>
                    <div class="item">
                        <div class="imagen four"></div>
                        <div class="cont-carousel">
                            <h2>Vive Comunicado</h2>
                            <a href="#" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect link-section">Conoce m&aacute;s</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer>
            <div class="mdl-container">
                <p>Latin American Travel 2018 - Todos los derechos reservados</p>  
            </div>
        </footer>
    </body>
    <script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jquery-ui.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jquery-migrate-1.2.1.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>index.js?v=<?php echo time();?>"></script>
</html>