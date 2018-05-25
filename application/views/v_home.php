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
        <meta name="google-signin-client_id" content="307501810241-9hfg73k6vir6u6v498cdrj920gb68qf4.apps.googleusercontent.com">
    	<title>Latin American Travel</title>
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
        <div id="home">
            <div class="js-header">
                <div class="container text-right">
                    <div class="redes-header">
                        <ul>
                            <li class="border"><a href="tel:+51997725464"><i class="fa fa-phone same m-r-10"></i>997725464</a></li>
                            <li class="border"><a href="mailto:latintravelpe@yahoo.com"><i class="fa fa-envelope same m-r-10"></i>latintravelpe@yahoo.com</a></li>
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
                        <a class="navbar-brand logo" href="index.html"><img src="public/img/logo/logo.png"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="" class="link">Paquetes</a></li>
                            <li><a href="" class="link">Ofertas</a></li>
                            <li><a href="" class="link">Experiencias</a></li>
                            <li><a href="" class="link">Escr&iacute;benos</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <section id="principal">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="imagen one"></div>
                    </div>
                    <div class="item">
                        <div class="imagen two"></div>
                    </div>
                    <div class="item">
                        <div class="imagen three"></div>
                    </div>
                </div>
                <div class="cont-carousel">
                    <h2>Vive la mejor experiencia, Encuentra las mejores ofertas para ti.</h2>
                </div>
            </section>
        </div>
        <section id="paquetes" class="section">
            <div class="js-container">
                <h2 class="js-title">Nuestros Paquetes</h2>
                <div class="js-flex">
                    <div class="mdl-card mdl-paquetes">
                        <div class="mdl-card__title p-0">
                            <img src="<?php echo RUTA_IMG?>paquetes/paquete1.jpeg" alt="">
                            <div class="js-paquete-name">
                                <p>3 partidos</p>   
                            </div>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <div class="js-paquetes">
                                <i class="mdi mdi-location_on"></i>
                                <span>Moscú - Saransk - Kazan</span>
                            </div>
                            <div class="js-paquetes">
                                <i class="mdi mdi-date_range"></i>
                                <span>14 Días y 13 Noches</span>
                            </div>
                            <div class="js-contenido">
                                <p>Es una ciudad que lleva acumulando historia desde su fundación en el siglo XII, estos periodos históricos forman parte de la excurisión del centro histórico de Moscú.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-card mdl-paquetes">
                        <div class="mdl-card__title p-0">
                            <img src="<?php echo RUTA_IMG?>paquetes/paquete2.jpg" alt="">
                            <div class="js-paquete-name">
                                <p>3 partidos</p>   
                            </div>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <div class="js-paquetes">
                                <i class="mdi mdi-location_on"></i>
                                <span>Moscú - Saransk - Kazan</span>
                            </div>
                            <div class="js-paquetes">
                                <i class="mdi mdi-date_range"></i>
                                <span>14 Días y 13 Noches</span>
                            </div>
                            <div class="js-contenido">
                                <p>Es una ciudad que lleva acumulando historia desde su fundación en el siglo XII, estos periodos históricos forman parte de la excurisión del centro histórico de Moscú.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-card mdl-paquetes">
                        <div class="mdl-card__title p-0">
                            <img src="<?php echo RUTA_IMG?>paquetes/paquete1.jpeg" alt="">
                            <div class="js-paquete-name">
                                <p>3 partidos</p>   
                            </div>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <div class="js-paquetes">
                                <i class="mdi mdi-location_on"></i>
                                <span>Moscú - Saransk - Kazan</span>
                            </div>
                            <div class="js-paquetes">
                                <i class="mdi mdi-date_range"></i>
                                <span>14 Días y 13 Noches</span>
                            </div>
                            <div class="js-contenido">
                                <p>Es una ciudad que lleva acumulando historia desde su fundación en el siglo XII, estos periodos históricos forman parte de la excurisión del centro histórico de Moscú.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div id="ofertas" class="section">
            <div class="js-container">
                <h2 class="js-title">Mejores Ofertas</h2>
                <div class="js-flex">
                    <div class="mdl-card mdl-ofertas">
                        <div class="mdl-card__title p-0">
                            <img src="<?php echo RUTA_IMG?>paquetes/paquete1.jpeg" alt="">
                            <div class="js-paquete-name">
                                <p>3 partidos</p>   
                            </div>
                        </div>
                    </div>
                    <div class="mdl-card mdl-ofertas">
                        <div class="mdl-card__title p-0">
                            <img src="<?php echo RUTA_IMG?>paquetes/paquete2.jpg" alt="">
                            <div class="js-paquete-name">
                                <p>3 partidos</p>   
                            </div>
                        </div>
                    </div>
                    <div class="mdl-card mdl-ofertas">
                        <div class="mdl-card__title p-0">
                            <img src="<?php echo RUTA_IMG?>paquetes/paquete1.jpeg" alt="">
                            <div class="js-paquete-name">
                                <p>3 partidos</p>   
                            </div>
                        </div>
                    </div>
                    <div class="mdl-card mdl-ofertas">
                        <div class="mdl-card__title p-0">
                            <img src="<?php echo RUTA_IMG?>paquetes/paquete1.jpeg" alt="">
                            <div class="js-paquete-name">
                                <p>3 partidos</p>   
                            </div>
                        </div>
                    </div>
                    <div class="mdl-card mdl-ofertas">
                        <div class="mdl-card__title p-0">
                            <img src="<?php echo RUTA_IMG?>paquetes/paquete1.jpeg" alt="">
                            <div class="js-paquete-name">
                                <p>3 partidos</p>   
                            </div>
                        </div>
                    </div>
                    <div class="mdl-card mdl-ofertas">
                        <div class="mdl-card__title p-0">
                            <img src="<?php echo RUTA_IMG?>paquetes/paquete1.jpeg" alt="">
                            <div class="js-paquete-name">
                                <p>3 partidos</p>   
                            </div>
                        </div>
                    </div>
                    <div class="mdl-card mdl-ofertas">
                        <div class="mdl-card__title p-0">
                            <img src="<?php echo RUTA_IMG?>paquetes/paquete1.jpeg" alt="">
                            <div class="js-paquete-name">
                                <p>3 partidos</p>   
                            </div>
                        </div>
                    </div>
                    <div class="mdl-card mdl-ofertas">
                        <div class="mdl-card__title p-0">
                            <img src="<?php echo RUTA_IMG?>paquetes/paquete1.jpeg" alt="">
                            <div class="js-paquete-name">
                                <p>3 partidos</p>   
                            </div>
                        </div>
                    </div>
                    <div class="mdl-card mdl-ofertas">
                        <div class="mdl-card__title p-0">
                            <img src="<?php echo RUTA_IMG?>paquetes/paquete1.jpeg" alt="">
                            <div class="js-paquete-name">
                                <p>3 partidos</p>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="experiencia" class="section">
            <div class="js-container">
                <h2 class="js-title">Mira las Experiencias</h2>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="mdl-card mdl-experiencia">
                            <div class="mdl-card__title">
                                <h2>Jose Minaya</h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                <p>Latin America es bravazo, Siempre  me entero de todas las noticias. Latin America es bravazo, Siempre  me entero de todas las noticias. Latin America es bravazo, Siempre  me entero de todas las noticias</p>
                            </div>
                            <div class="mdl-card__actions">
                                <small>Marzo 03, 2018</small>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mdl-card mdl-experiencia">
                            <div class="mdl-card__title">
                                <h2>Franco Condor</h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                <p>Latin America es bravazo, Siempre  me entero de todas las noticias. Latin America es bravazo, Siempre  me entero de todas las noticias. Latin America es bravazo, Siempre  me entero de todas las noticias</p>
                            </div>
                            <div class="mdl-card__actions">
                                <small>Marzo 02, 2018</small>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mdl-card mdl-experiencia">
                            <div class="mdl-card__title">
                                <h2>Jhonatan Iberico</h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                <p>Latin America es bravazo, Siempre  me entero de todas las noticias. Latin America es bravazo, Siempre  me entero de todas las noticias. Latin America es bravazo, Siempre  me entero de todas las noticias.</p>
                            </div>
                            <div class="mdl-card__actions">
                                <small>Marzo 01, 2018</small>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mdl-card mdl-experiencia">
                            <div class="mdl-card__title">
                                <h2>Franco Condor</h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                <p>Latin America es bravazo, Siempre  me entero de todas las noticias. Latin America es bravazo, Siempre  me entero de todas las noticias. Latin America es bravazo, Siempre  me entero de todas las noticias</p>
                            </div>
                            <div class="mdl-card__actions">
                                <small>Marzo 01, 2018</small>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mdl-card mdl-experiencia">
                            <div class="mdl-card__title">
                                <h2>Franco Condor</h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                <p>Latin America es bravazo, Siempre  me entero de todas las noticias. Latin America es bravazo, Siempre  me entero de todas las noticias. Latin America es bravazo, Siempre  me entero de todas las noticias</p>
                            </div>
                            <div class="mdl-card__actions">
                                <small>Marzo 01, 2018</small>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mdl-card mdl-experiencia">
                            <div class="mdl-card__title">
                                <h2>Franco Condor</h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                <p>Latin America es bravazo, Siempre  me entero de todas las noticias. Latin America es bravazo, Siempre  me entero de todas las noticias. Latin America es bravazo, Siempre  me entero de todas las noticias</p>
                            </div>
                            <div class="mdl-card__actions">
                                <small>Marzo 01, 2018</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mdl-card">
                    
                </div>
                <div class="g-signin2" data-onsuccess="onSignIn"></div>
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Comentar</button>
            </div>
        </section>
        <section id="contactanos" class="section">
            <div class="container js-container">
                <h2 class="">Escr&iacute;benos</h2>
                <div class="col-xs-12">
                    <div class="col-sm-6 js-input">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="nombre">
                            <label class="mdl-textfield__label" for="nombre">Nombre</label>
                        </div>
                    </div>
                    <div class="col-sm-6 js-input">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="dni">
                            <label class="mdl-textfield__label" for="dni">Documento de Identidad</label>
                        </div>
                    </div>
                    <div class="col-sm-6 js-input">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="correo">
                            <label class="mdl-textfield__label" for="correo">Correo</label>
                        </div>
                    </div>
                    <div class="col-sm-6 js-input">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="celular">
                            <label class="mdl-textfield__label" for="celular">Celular</label>
                        </div>
                    </div>
                    <div class="col-sm-12 js-input">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <textarea rows="3" class="mdl-textfield__input" type="text" id="mensaje"></textarea>
                            <label class="mdl-textfield__label" for="mensaje">Mensaje</label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="enviarDatos();">Enviar</button>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="js-container">
                <p>Latin American Travel 2018 - Todos los derechos reservados</p>  
            </div>
        </footer>
    </body>
    <script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>owl-carousel/owl.carousel.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="<?php echo RUTA_JS?>index.js?v=<?php echo time();?>"></script>
    <script type="text/javascript">
        function onSignIn(googleUser) {
          var profile = googleUser.getBasicProfile();
          console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
          console.log('Name: ' + profile.getName());
          console.log('Image URL: ' + profile.getImageUrl());
          console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
        }
    </script>
</html>