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
                    <a class="navbar-brand logo link" href="Home"><img src="<?php echo RUTA_IMG?>logo/logo.png"></a>
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
                        <button id="btnCrearOferta" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="modalCrearOferta()">Agregar oferta</button>
                        <h2 class="js-title">Mejores Ofertas</h2>
                        <div class="js-flex ofertas-insert" id="cont_ofertas">
                            <?php echo $ofertas ?>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="paquete">
                        <button id="btnCrearPaquete" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="modalCrearPaquete()">Agregar paquete</button>
                        <h2 class="js-title">Nuestros paquetes</h2>
                        <div class="js-flex paquetes-insert" id="cont_paquetes">
                            <?php echo $paquetes ?>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="experiencia">
                        <div class="mdl-card mdl-card-table contenido-admin">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered table-hover dt-responsive" cellspacing="0" width="100%">
                                    <thead>
                                        <tr class="tr-header-reporte">
                                            <th class="text-left" style="color: black !important;">Imagen</th>
                                            <th class="text-left" style="color: black !important;">Nombre</th>
                                            <th class="text-left" style="color: black !important;">Comentario</th>
                                            <th class="text-left" style="color: black !important;">Fecha</th>
                                            <th class="text-left" style="color: black !important;">Acción</th>
                                        </tr>
                                    </thead>
                                  <tbody id="cont_tabla">
                                      <?php echo $html ?>
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="ModalConfirmar" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="mdl-card" >
                        <div class="mdl-card__title p-b-0">
                            <h2>¿Está seguro de eliminar este contenido?</h2>
                        </div>
                        <div class="mdl-card__supporting-text p-t-0">
                            <h2></h2>
                            <small>Recuerda: Al confirmar no podr&aacute;s modificar tu elecci&oacute;n.</small>
                        </div>
                        <div class="mdl-card__actions">
                            <button id="btnConfirmarEliminar" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" >Confirmar</button>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="resetDatos()" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="ModalCrearPaquete" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="mdl-card" >
                        <div class="mdl-card__title p-b-0">
                            <h2>Registrar paquete</h2>
                        </div>
                        <div class="mdl-card__supporting-text p-t-0">
                            Título:<input type="text" id="tituloAtractivo"><br>
                            Días y noches:<input type="text" id="diasAtractivo"><br>
                            
                            <h2>Atractivos</h2>
                            Lugar:<input type="text" id="lugarAtractivo"><br>
                            Descripcion:<input type="text" id="descripcionAtractivo"><br>
                            <button id="btnAgregarAtractivo" onclick="agregarAtractivo()"
                                class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                                Agregar
                            </button>
                            <table id="example" class="table table-bordered table-hover dt-responsive" cellspacing="0" width="100%">
                                <thead>
                                    <tr class="tr-header-reporte">
                                        <th class="text-left" style="color: black !important;">Lugar</th>
                                        <th class="text-left" style="color: black !important;">Descripcion</th>
                                        <th class="text-left" style="color: black !important;">Acción</th>
                                    </tr>
                                </thead>
                                <tbody id="cont_tabla_paquetes">
                                </tbody>
                            </table>
                            <h2></h2>
                            <small></small>
                        </div>
                        <div class="mdl-card__actions">
                            <button id="btnConfirmarRegistrar" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="registrarPaquete()">Confirmar</button>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="ModalCrearOferta" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="mdl-card" >
                        <div class="mdl-card__title p-b-0">
                            <h2>Registrar oferta</h2>
                        </div>
                        <div class="mdl-card__supporting-text p-t-0">
                            Título:<input type="text" id="tituloAtractivoOff"><br>
                            Días y noches:<input type="text" id="diasAtractivoOff"><br>
                            Descripción general:<input type="text" id="descAtractivoOff"><br>
                            
                            <h2>Atractivos</h2>
                            Lugar:<input type="text" id="lugarAtractivoOff"><br>
                            Descripcion:<input type="text" id="descripcionAtractivoOff"><br>
                            <button id="btnAgregarAtractivoOff" onclick="agregarAtractivoOff()"
                                class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                                Agregar
                            </button>
                            <table id="example" class="table table-bordered table-hover dt-responsive" cellspacing="0" width="100%">
                                <thead>
                                    <tr class="tr-header-reporte">
                                        <th class="text-left" style="color: black !important;">Lugar</th>
                                        <th class="text-left" style="color: black !important;">Descripción</th>
                                        <th class="text-left" style="color: black !important;">Acción</th>
                                    </tr>
                                </thead>
                                <tbody id="cont_tabla_ofertas">
                                </tbody>
                            </table>
                            <h2></h2>
                            <small></small>
                        </div>
                        <div class="mdl-card__actions">
                            <button id="btnConfirmarRegistrarOff" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="registrarOferta()">Confirmar</button>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" data-dismiss="modal">Cancelar</button>
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
        </script>
    </body>
</html>