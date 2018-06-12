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
        <nav class="navbar navbar-default js-header--fixed">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand logo link" href="#principal"><img src="<?php echo RUTA_IMG?>logo/logo.png"></a>
                </div>
            </div>
        </nav>
        <section id="principal">
            <div class="js-container">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#oferta" aria-controls="oferta" role="tab" data-toggle="tab">Ofertas</a></li>
                    <li><a href="#paquete" aria-controls="paquete" role="tab" data-toggle="tab">Paquetes</a></li>
                    <li><a href="#experiencia" aria-controls="experiencia" role="tab" data-toggle="tab">Experiencias</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="oferta">
                        <h2 class="js-title">Mejores Ofertas</h2>
                        <div class="js-flex ofertas-insert">
                            <div class="mdl-card mdl-ofertas">
                                <div class="mdl-card__title p-0">
                                    <button id="button10" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="goToOferta(this.id)">Ver m&aacute;s</button>
                                    <img src="<?php echo RUTA_IMG?>paquetes/paquete1.jpeg" alt="">
                                    <div class="js-paquete-name">
                                        <p>3 partidos</p>   
                                    </div>
                                </div>
                                <div class="mdl-card__supporting-text">
                                    <div class="js-paquetes location">
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
                    <div role="tabpanel" class="tab-pane fade" id="paquete">
                        <h2 class="js-title">Nuestros paquetes</h2>
                        <div class="js-flex paquetes-insert">
                            <div class="mdl-card mdl-paquetes">
                                <div class="mdl-card__title p-0">
                                    <div class="fondo-oferta oferta1">
                                        <button id="button1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="goToPaquete(this.id)">Ver m&aacute;s</button>
                                    </div>
                                    <div class="js-paquete-name">
                                        <p>Machu Picchu</p>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="experiencia">
                        
                    </div>
                </div>
            </div>
        </section>
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
        <script type="text/javascript">
        // $( ".target" ).change(function() {
        //     function onSuccess(googleUser) {
        //       console.log('Signed in as: ' + googleUser.getBasicProfile().getName());
        //     }
        //     function onSignIn(googleUser) {
        //       var profile = googleUser.getBasicProfile();
        //       console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        //       console.log('Name: ' + profile.getName());
        //       console.log('Image URL: ' + profile.getImageUrl());
        //       console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
        //     }
        // });
        </script>
    </body>
</html>