<!DOCTYPE html> 
<html>
    <head>
        <meta charset="ISO-8859-1">
        <meta http-equiv="X-UA-Compatible"  content="IE=edge">
        <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <meta name="description"            content="Agencia de turismo y viajes a peru">
        <meta name="keywords"               content="Latin American Travel">
        <meta name="robots"                 content="Index,Follow">
        <meta name="date"                   content="May 18, 2018"/>
        <meta name="language"               content="es">
        <meta name="theme-color"            content="#000000">
        <meta name="google-signin-client_id" content="307501810241-9hfg73k6vir6u6v498cdrj920gb68qf4.apps.googleusercontent.com">
        <title>Paquetes | Latin American Travel</title>
        <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/favicon.ico">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>owl-carousel/owl.theme.default.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>owl-carousel/owl.carousel.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>rubik.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>animate.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
    </head>
    <body>
        <div class="js-header">
            <div class="container text-right">
                <div class="redes-header">
                    <ul>
                        <li class="border"><a href="tel:+51997725464"><i class="fa fa-phone same m-r-10"></i><span>997725464</span></a></li>
                        <li class="border"><a href="mailto:latintravelpe@yahoo.com"><i class="fa fa-envelope same m-r-10"></i><span>latintravelpe@yahoo.com</span></a></li>
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
                    <a class="navbar-brand logo link" href="Home"><img src="<?php echo RUTA_IMG?>logo/logo.png"></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="offer" class="link">Ofertas</a></li>
                        <li><a href="Package" class="link">Paquetes</a></li>
                        <li><a href="About" class="link">Nosotros</a></li>
                        <li><a href="Contact" class="link">Escr&iacute;benos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section id="principal" class="js-fondo--principal">
            <div class="fondo-responsive"></div>
            <div class="cont-carousel">
                <div class="cont-carousel__contenido">
                    <h2>Vive la mejor experiencia, Encuentra las mejores ofertas para ti.</h2>
                </div>
            </div>
            <div class="cont-redes">
                <p>S&iacute;guenos</p>
                <a class="mdl-button mdl-js-button mdl-button--fab" href="https://www.facebook.com/Latin-American-Travel-1991867910865245/" target="_blank"><i class="fa fa-facebook"></i></a>
                <a class="mdl-button mdl-js-button mdl-button--fab"><i class="fa fa-instagram"></i></a>
            </div>
        </section>
        <section id="paquetes" class="section">
            <div class="js-container">
                <h2 class="js-title">Nuestros paquetes</h2>
                <div class="js-flex paquetes-insert">
                    <?php echo $paquetes ?>
                </div>
            </div>
        </section>
        <footer>
            <div class="js-container">
                <p>Latin American Travel 2018 - Todos los derechos reservados</p>  
            </div>
        </footer>
        <script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>owl-carousel/owl.carousel.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <script type="text/javascript" src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>index.js?v=<?php echo time();?>"></script>
    </body>
</html>