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
        <div class="js-header">
            <div class="container text-right">
                <div class="redes-header">
                    <ul>
                        <li class="border"><a href="tel:01396-3263"><i class="fa fa-phone same m-r-10"></i><span>01 396-3263</span></a></li>
                        <li class="border"><a href="tel:+51997725464"><i class="fa fa-mobile same m-r-10"></i><span>+51 997725464</span></a></li>
                        <li class="border"><a href="mailto:latintravelpe@yahoo.com"><i class="fa fa-envelope same m-r-10"></i><span>latintravelpe@yahoo.com</span></a></li>
                    </ul>
                </div>
                <div class="js-idioma">
                    <select class="selectpicker" id="IdiomaHome"  name="Idioma" onchange="cambiarIdiomaHome()">
                        <option value="Español">Espa&ntilde;ol</option>
                        <option value="Ruso">Ruso</option>
                    </select>
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
                    <a class="navbar-brand logo link" href="#principal"><img src="<?php echo RUTA_IMG?>logo/logo.png"></a>
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
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="fondo-responsive fondo1"></div>
                    <div class="cont-carousel">
                        <div class="cont-carousel__contenido">
                            <h2>Vive la mejor experiencia, Encuentra las mejores ofertas para ti.</h2>
                            <div class="js-search hidden">
                                <input type="text" class="form-control" placeholder="Busca tu destino ideal" id="texto" onkeypress="verificarDatos(event);">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="buscarOferta()">BUSCAR</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="fondo-responsive fondo2"></div>
                    <div class="cont-carousel">
                        <div class="cont-carousel__contenido">
                            <h2>Vive la mejor experiencia, Encuentra las mejores ofertas para ti.</h2>
                            <div class="js-search hidden">
                                <input type="text" class="form-control" placeholder="Busca tu destino ideal" id="texto" onkeypress="verificarDatos(event);">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="buscarOferta()">BUSCAR</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="fondo-responsive fondo3"></div>
                    <div class="cont-carousel">
                        <div class="cont-carousel__contenido">
                            <h2>Vive la mejor experiencia, Encuentra las mejores ofertas para ti.</h2>
                            <div class="js-search hidden">
                                <input type="text" class="form-control" placeholder="Busca tu destino ideal" id="texto" onkeypress="verificarDatos(event);">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="buscarOferta()">BUSCAR</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cont-redes">
                <p>S&iacute;guenos</p>
                <a class="mdl-button mdl-js-button mdl-button--fab" href="https://www.facebook.com/Latin-American-Travel-1991867910865245/" target="_blank"><i class="fa fa-facebook"></i></a>
                <a class="mdl-button mdl-js-button mdl-button--fab" href="https://www.instagram.com/latintravel18/?hl=es-la" target="_blank"><i class="fa fa-instagram"></i></a>
            </div>
        </section>
        <section id="paquetes" class="section">
            <div class="js-container">
                <h2 class="js-title">Mejores ofertas</h2>
                <div class="js-flex paquetes-insert">
                    <?php echo $paquetes ?>
                </div>
            </div>
        </section>
        <section id="contactanos" class="section">
            <div class="fondo-imagen"></div>
            <div class="js-container row">
                <div class="title-contactanos">
                    <h2>Escr&iacute;benos</h2>
                    <p>Te ayudamos a vivir tu mejor experiencia</p>
                </div>
                <div class="col-xs-12 p-0">
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
                    <div class="col-xs-12 js-input">
                        <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
                            <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input">
                            <span class="mdl-checkbox__label">He le&iacute;do y acepto los <a data-toggle="modal" data-target="#ModalTerminos">T&eacute;rminos y Condiciones.</a></span>
                        </label>
                    </div>
                    <div class="col-xs-12 text-center">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button m-t-20 m-b-10" onclick="enviarDatos();">Enviar</button>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="js-container">
                <p>Latin American Travel 2018 - Todos los derechos reservados</p>  
            </div>
        </footer>
        <div class="modal fade" id="ModalTerminos" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-large" role="document">
                <div class="modal-content">
                    <div class="mdl-card">
                        <div class="mdl-card__title">
                            <h2>T&eacute;rminos y Condiciones</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <div class="conditions">
                                <h2>T&eacute;rminos Generales de uso del sitio web</h2>
                                <p>El uso de nuestro sitio web por parte de nuestros usuarios certifica la aceptación plena, directa, consciente y sin reservas de todas y cada una de las disposiciones incluidas en los t&eacute;rminos y condiciones aqu&iacute; estipulados, por ello lo invitamos a leer detenidamente estas condiciones. Latin American Travel es un intermediario de ventas entre viajeros y proveedores de servicios tur&iacute;sticos que ofrece variadas opciones tur&iacute;sticas y facilita sus reservas. Cada proveedor de servicio tur&iacute;stico es responsable por todos los servicios, horarios y garant&iacute;as en cada reserva seg&uacute;n sus propios t&eacute;rminos y condiciones. Algunos de los servicios que ofrecemos de terceros poseen caracter&iacute;sticas particulares propias del servicio y seg&uacute;n el caso podr&iacute;an sustituir o complementar a los t&eacute;rminos aqu&iacute; descritos, los mismos que ser&aacute;n mostrados de manera clara como informaci&oacute;n adicional para el usuario. El uso, navegaci&oacute;n y accesos a nuestro sitio web, son gratuitos. Sin embargo los servicios ofrecidos se encuentran sujetos a un pago por dicha prestación de servicios.</p>
                            </div>
                            <div class="conditions">
                                <h2>Reservas de Paquetes Tur&iacute;sticos:</h2>
                                <p>Toda solicitud de reserva de programas de viajes o tours que se confirme está garantizadas. La confirmaci&oacute;n de la reserva solicitada le ser&aacute; informada a trav&eacute;s de un e-mail indicando el c&oacute;digo de reserva de cada programa de viaje solicitado. La confirmaci&oacute;n de los servicios proceder&aacute; luego de haber recibido su solicitud de reserva online, o haber recibido un dep&oacute;sito de garant&iacute;a. El total del pago para los paquetes tur&iacute;sticos deber&aacute; ser realizado 60 d&iacute;as antes de la fecha se&ntilde;alada como inicio del programa de viajes. El pasajero ser&aacute; contactado por el operador tur&iacute;stico en el lugar indicado en el itinerario del programa o tour. El pasajero debe identificarse con su pasaporte o documento de identidad y mencionar el c&oacute;digo de confirmaci&oacute;n de reserva para dar inicio a la prestaci&oacute;n de los servicios tur&iacute;sticos. Es responsabilidad del pasajero indicar los datos de su arribo y salida con la debida anticipaci&oacute;n. En caso el pasajero requiera recojo de alg&uacute;n lugar espec&iacute;fico, distinto al publicado en el programa – itinerario, deber&aacute; coordinarlo anticipadamente con Tourenlima.com. Las porciones del paquete / tour dejados de usar por decisi&oacute;n del pasajero no ser&aacute;n reembolsables una vez que el paquete / tour est&eacute; en marcha.</p>
                                <span>Penalidades:</span>
                                <p>Toda cancelaci&oacute;n por parte del pasajero antes de los 60 días de la fecha de inicio del paquete turístico ser&aacute; penalizado con $100 D&oacute;lares Norteamericanos del dep&oacute;sito no reembolsable m&aacute;s $25 D&oacute;lares Norteamericanos de gastos administrativos. Para toda cancelaci&oacute;n, por parte del pasajero, entre los 59 y 31 d&iacute;as de la fecha de inicio del tour ser&aacute;n penalizados con el 50% del valor del programa, m&aacute;s US $25 D&oacute;lares Norteamericanos de gastos administrativos. Para toda cancelaci&oacute;n, por parte del pasajero, con 30 d&iacute;as o menos de anticipación a la fecha de inicio del tour ser&aacute;n penalizados con el 100% del valor del programa.</p>
                                <small>Nota: La reserva de los programas para el Inca Trail no son reembolsables en ning&uacute;n caso.</small>
                            </div>
                            <div class="conditions">
                                <h2>Reservas de Hoteles (No incluidos en un Paquete Tur&iacute;stico):</h2>
                                <p>Toda solicitud de reserva de alojamiento en hoteles confirmada est&aacute; asegurada y garantizada. La confirmaci&oacute;n de la reserva solicitada le ser&aacute; informada a trav&eacute;s de un e-mail indicando el c&oacute;digo de reserva de cada hotel solicitado. Si el hotel lo tiene publicado y especificado, la tarifa de alojamiento incluye el desayuno y traslado aeropuerto – hotel, caso contrario la tarifa s&oacute;lo incluye alojamiento. El pasajero sólo requiere presentarse al hotel reservado e identificarse con su pasaporte o documento de identidad y mencionar el c&oacute;digo de confirmaci&oacute;n de reserva para hacer v&aacute;lida su estad&iacute;a.</p>
                                <span>Penalidades:</span>
                                <p>Toda cancelaci&oacute;n por parte del pasajero hasta con 16 d&iacute;as de anticipaci&oacute;n a la fecha de arribo est&aacute; sujeta a una penalidad de $25 D&oacute;lares por gastos administrativos. Toda cancelaci&oacute;n por parte del pasajero con 15 d&iacute;as o menos a la fecha de arribo est&aacute; sujeta a una penalidad equivalente al valor de la primera noche, más $25 D&oacute;lares de gastos administrativos. En caso el pasajero no cancele la reserva en forma anticipada o no se presente al hotel en la fecha de su solicitud de reserva, el total de noches reservadas no será reembolsable. En caso el pasajero decida abandonar el hotel antes de la fecha de salida reservada, la diferencia de noches no ser&aacute; reembolsable.</p>
                            </div>
                            <div class="conditions">
                                <h2>Transporte A&eacute;reo – Terrestre</h2>
                                <p>Las aerol&iacute;neas IATA o empresas de transporte terrestre no tienen ninguna responsabilidad por cualquier acto o evento que los pasajeros puedan sufrir mientras estos no se encuentren a bordo del avión, tren u &oacute;mnibus. Cualquier cambio de fecha cuando el paquete o tour incluya una tarifa promocional a&eacute;rea o terrestre est&aacute; sujeta a una penalidad.</p>
                                <p>Documentaci&oacute;n: Los pasajeros deber&aacute;n portar un pasaporte v&aacute;lido o documento de viaje de acuerdo a su nacionalidad seg&uacute;n las normas legales requeridas por el Per&uacute;.</p>
                                <span>Cambios de Fecha:</span>
                                <p>Los tickets a&eacute;reos no permiten los cambios de fecha sin considerar la disponibilidad en la nueva fecha y sin considerar la penalidad m&acute;s diferencia tarifaria que pueda aplicar la aerol&iacute;nea. Los cambios de fecha referentes a otros tipos de servicios depender&acute;n de las condiciones y disponibilidad indicada por el proveedor de servicios correspondiente.</p>
                                <span>Equipaje:</span>
                                <p>Los pesos y restricciones en los equipajes dependen de la aerol&iacute;nea y/o transporte terrestre. Es responsabilidad del cliente asegurarse de cumplir con las normas impuestas por cada aerol&iacute;nea.</p>
                            </div>
                            <div class="conditions">
                                <h2>Servicios a solicitud / Personalizados:</h2>
                                <p>Para servicios por solicitud, un representante de Latin American Travel se contactar&aacute; con Ud. para confirmar la disponibilidad y finalizar el proceso de venta.  Al remitir una cotizaci&oacute;n para servicios por solicitud, Latin American Travel enviar&aacute; el precio estimado al momento de elaborar la cotizaci&oacute;n. Latin American Travel buscar&aacute; respetar los precios hasta el momento de la emisi&oacute;n de los pasajes, tickets o vouchers de servicios, sin embargo los precios pueden cambiar debido a cambios efectuados por los proveedores. El precio no sufrir&aacute; cambios ni modificaciones siempre que el servicio se encuentre con confirmaci&oacute;n de pago del mismo.</p>
                            </div>
                            <div class="conditions">
                                <h2>Reservas de Tours y Servicios Tur&iacute;sticos:</h2>
                                <p>Toda solicitud de reserva de tours o servicios tur&iacute;sticos que se confirme est&aacute; garantizada. La confirmaci&oacute;n de la reserva solicitada le ser&aacute; informada a trav&eacute;s de un e-mail indicando el c&oacute;digo de reserva de cada tour o servicio tur&iacute;stico solicitado. La confirmaci&oacute;n de los servicios proceder&aacute; luego de haber recibido su solicitud de reserva online, o haber recibido un dep&oacute;sito de garant&iacute;a.</p>
                                <p>El total del pago para los tours y servicios tur&iacute;sticos deber&aacute; ser realizado con un m&iacute;nimo de 48 horas antes de la fecha se&ntilde;alada como inicio del programa de viajes. El pasajero ser&aacute; contactado por el operador tur&iacute;stico en el lugar indicado en el itinerario del tour o servicio tur&iacute;stico. El pasajero debe identificarse con su pasaporte o documento de identidad y mencionar el c&oacute;digo de confirmaci&oacute;n de reserva para dar inicio a la prestaci&oacute;n de los servicios tur&iacute;sticos.Es responsabilidad del pasajero indicar los datos de su arribo y salida con la debida anticipaci&oacute;n.</p>
                                <p>En caso el pasajero requiera recojo de alg&uacute;n lugar espec&iacute;fico, distinto al publicado en el programa – itinerario, deber&aacute; coordinarlo anticipadamente con Latin American Travel. Las porciones del tour o servicio tur&iacute;stico dejados de usar por decisi&oacute;n del pasajero no ser&aacute;n reembolsables una vez que el tour o servicio tur&iacute;stico est&eacute; en marcha.</p>
                                <span>Penalidades</span>
                                <p>Toda cancelaci&oacute;n por parte del pasajero entre los 59 y 31 días antes de la fecha de inicio del tour ser&aacute; penalizada con el 12% del monto total de reserva por concepto de gastos administrativos. Toda cancelaci&oacute;n por parte del pasajero con 30 d&iacute;as o menos de anticipaci&oacute;n a la fecha de inicio del tour ser&aacute; penalizada con el 50% del monto total de reserva. Toda cancelaci&oacute;n por parte del pasajero antes de las 48 horas de la fecha de inicio del tour o servicio turístico ser&aacute; penalizada con el 100% del monto total de reserva.</p>
                            </div>
                        </div>
                        <div class="mdl-card__actions text-right">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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