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
        <section id="nosotros">
            <div class="js-container">
                
            </div>
        </section>
        <section id="experiencia" class="section">
            <div class="js-container">
                <h2 class="js-title">Mira las Experiencias</h2>
                <div class="owl-carousel owl-theme comentarios">
                    <?php echo $comentarios ?>
                </div>
                <div class="mdl-comentar">
                    <div class="form-group">
                        <label for="comment">Y tú qué opinas?</label>
                        <textarea class="form-control" rows="5" id="tacomentario" maxlength="250"></textarea>
                    </div>
                </div>
                <div class="g-signin2" data-onsuccess="onSignIn" style="display: none"></div>
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effec js-button" onclick="comentar()">Comentar</button>
            </div>
        </section>
        <section id="contactanos" class="section">
            <div class="fondo-imagen"></div>
            <div class="container js-container">
                <div class="title-contactanos">
                    <h2>Escr&iacute;benos</h2>
                    <p>Te ayudamos a vivir tu mejor experiencia</p>
                </div>
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
                    <div class="col-xs-12 text-center">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button" onclick="enviarDatos();">Enviar</button>
                    </div>
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