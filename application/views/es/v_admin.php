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
        <link rel="stylesheet"    href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet"    href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.bootstrap.min.css">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>rubik.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>animate.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
    </head>
    <body>
        <div class="js-header--nav js-fixed">
            <div class="js-header--left">
                <img src="<?php echo RUTA_IMG?>logo/logo.png">
            </div>
            <div class="js-header--right">
                <a onclick="cerrarSesion()">Cerrar Sesi&oacute;n</a>
            </div>
        </div>
        <section id="admin" class="section m-t-30">
            <div class="js-container">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#oferta" aria-controls="oferta" role="tab" data-toggle="tab">Ofertas</a></li>
                    <li><a href="#paquete" aria-controls="paquete" role="tab" data-toggle="tab">Paquetes</a></li>
                    <li><a href="#experiencia" aria-controls="experiencia" role="tab" data-toggle="tab">Experiencias</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="oferta">
                        <div class="js-button--admin">
                            <button id="btnCrearOferta" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-button--color" onclick="modalCrearOferta()">Agregar oferta</button>
                        </div>
                        <h2 class="js-title">Mejores Ofertas</h2>
                        <div class="js-flex ofertas-insert" id="cont_ofertas">
                            <?php echo $ofertas ?>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="paquete">
                        <div class="js-button--admin">
                            <button id="btnCrearPaquete" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-button--color" onclick="modalCrearPaquete()">Agregar paquete</button>
                        </div>
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
                            <p>Recuerda: Al confirmar no podr&aacute;s modificar tu elecci&oacute;n.</p>
                        </div>
                        <div class="mdl-card__actions">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-button--default" onclick="resetDatos()" data-dismiss="modal">Cancelar</button>
                            <button id="btnConfirmarEliminar" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-button--color">Confirmar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="ModalCrearPaquete" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="mdl-card" >
                        <div class="mdl-card__title p-b-0">
                            <h2 id="titlePaquete">Registrar paquete</h2>
                        </div>
                        <div class="mdl-card__supporting-text p-t-0">
                            <div class="col-xs-12 js-input">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label js-color">
                                    <input class="mdl-textfield__input" type="text" id="tituloAtractivo">
                                    <label class="mdl-textfield__label" for="tituloAtractivo">T&iacute;tulo</label>
                                </div>
                            </div>
                            <div class="col-xs-12 js-input">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label js-color">
                                    <input class="mdl-textfield__input" type="text" id="diasAtractivo">
                                    <label class="mdl-textfield__label" for="diasAtractivo">D&iacute;as y noches</label>
                                </div>
                            </div>
                            <div class="mdl-input factura">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-select"
                                onclick="subirImagen()" id="btnSubirImagen">Subir imagen</button>
                            </div>
                            <h3>Atractivos</h3>
                            <div class="col-xs-12 js-input">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label js-color">
                                    <input class="mdl-textfield__input" type="text" id="lugarAtractivo">
                                    <label class="mdl-textfield__label" for="lugarAtractivo">Lugar</label>
                                </div>
                            </div>
                            <div class="col-xs-12 js-input">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label js-color">
                                    <textarea rows="3" class="mdl-textfield__input" type="text" id="descripcionAtractivo"></textarea>
                                    <label class="mdl-textfield__label" for="descripcionAtractivo">Descripcion</label>
                                </div>
                            </div>
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
                            <!-- <p>Recuerda: Al confirmar no podr&aacute;s modificar tu elecci&oacute;n.</p> -->
                        </div>
                        <div class="mdl-card__actions">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-button--default" data-dismiss="modal">Cancelar</button>
                            <button id="btnConfirmarRegistrar" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-button--color" onclick="registrarPaquete()">Confirmar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="ModalCrearOferta" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="mdl-card" >
                        <div class="mdl-card__title p-b-0">
                            <h2 id="titleOferta">Registrar oferta</h2>
                        </div>
                        <div class="mdl-card__supporting-text p-t-0">
                            <div class="col-xs-12 js-input">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label js-color">
                                    <input class="mdl-textfield__input" type="text" id="tituloAtractivoOff">
                                    <label class="mdl-textfield__label" for="tituloAtractivoOff">T&iacute;tulo</label>
                                </div>
                            </div>
                            <div class="col-xs-12 js-input">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label js-color">
                                    <input class="mdl-textfield__input" type="text" id="diasAtractivoOff">
                                    <label class="mdl-textfield__label" for="diasAtractivoOff">D&iacute;as y noches</label>
                                </div>
                            </div>
                            <div class="col-xs-12 js-input">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label js-color">
                                    <input class="mdl-textfield__input" type="text" id="descAtractivoOff">
                                    <label class="mdl-textfield__label" for="descAtractivoOff">Descripci&oacute;n general</label>
                                </div>
                            </div>
                            <div class="mdl-input factura">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-select"
                                onclick="subirImagenOff()" id="btnSubirImagenOff">Subir imagen</button>
                            </div>
                            <h3>Atractivos</h3>
                            <div class="col-xs-12 js-input">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label js-color">
                                    <input class="mdl-textfield__input" type="text" id="lugarAtractivoOff">
                                    <label class="mdl-textfield__label" for="lugarAtractivoOff">Lugar</label>
                                </div>
                            </div>
                            <div class="col-xs-12 js-input">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label js-color">
                                    <textarea rows="3" class="mdl-textfield__input" type="text" id="descripcionAtractivoOff"></textarea>
                                    <label class="mdl-textfield__label" for="descripcionAtractivoOff">Descripcion</label>
                                </div>
                            </div>
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
                            <!-- <p>Recuerda: Al confirmar no podr&aacute;s modificar tu elecci&oacute;n.</p> -->
                        </div>
                        <div class="mdl-card__actions">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-button--default" data-dismiss="modal">Cancelar</button>
                            <button id="btnConfirmarRegistrarOff" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-button--color" onclick="registrarOferta()">Confirmar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="ModalDias" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="mdl-card" >
                        <div class="mdl-card__title p-b-0">
                            <h2>Descripción por días</h2>
                        </div>
                        <div class="mdl-card__supporting-text p-t-0">
                            <div class="col-xs-12 js-input">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label js-color">
                                    <input class="mdl-textfield__input" type="text" id="titulo_dia">
                                    <label class="mdl-textfield__label" for="titulo_dia">T&iacute;tulo</label>
                                </div>
                            </div>
                            <div class="col-xs-12 js-input">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label js-color">
                                    <textarea rows="3" class="mdl-textfield__input" type="text" id="desc_dia"></textarea>
                                    <label class="mdl-textfield__label" for="desc_dia">Descripcion</label>
                                </div>
                            </div>
                            <button id="btnAgregarDia" onclick="agregarDia()"
                                class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                                Agregar
                            </button>
                            <table id="config_dias" class="table table-bordered table-hover dt-responsive" cellspacing="0" width="100%">
                                <thead>
                                    <tr class="tr-header-reporte">
                                        <th class="text-left" style="color: black !important;">Dia</th>
                                        <th class="text-left" style="color: black !important;">Título</th>
                                        <th class="text-left" style="color: black !important;">Descripción</th>
                                        <th class="text-left" style="color: black !important;">Acción</th>
                                    </tr>
                                </thead>
                                <tbody id="cont_tabla_dias">
                                </tbody>
                            </table>
                        </div>
                        <div class="mdl-card__actions">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-button--default" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="ModalPrecio" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="mdl-card" >
                        <div class="mdl-card__title p-b-0">
                            <h2>Precios ($)</h2>
                        </div>
                        <div class="mdl-card__supporting-text p-t-0">
                            <h3>Económico 3***</h3>
                            <div class="col-xs-6 js-input">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label js-color">
                                    <input class="mdl-textfield__input" type="text" id="eco_1">
                                    <label class="mdl-textfield__label" for="eco_1">Simple</label>
                                </div>
                            </div>
                            <div class="col-xs-6 js-input">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label js-color">
                                    <input class="mdl-textfield__input" type="text" id="eco_2">
                                    <label class="mdl-textfield__label" for="eco_2">Doble</label>
                                </div>
                            </div>
                            <h3>Superior 4****</h3>
                            <div class="col-xs-6 js-input">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label js-color">
                                    <input class="mdl-textfield__input" type="text" id="sup_1">
                                    <label class="mdl-textfield__label" for="sup_1">Simple</label>
                                </div>
                            </div>
                            <div class="col-xs-6 js-input">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label js-color">
                                    <input class="mdl-textfield__input" type="text" id="sup_2">
                                    <label class="mdl-textfield__label" for="sup_2">Doble</label>
                                </div>
                            </div>
                            <h3>Lujo 5*****</h3>
                            <div class="col-xs-6 js-input">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label js-color">
                                    <input class="mdl-textfield__input" type="text" id="luj_1">
                                    <label class="mdl-textfield__label" for="luj_1">Simple</label>
                                </div>
                            </div>
                            <div class="col-xs-6 js-input">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label js-color">
                                    <input class="mdl-textfield__input" type="text" id="luj_2">
                                    <label class="mdl-textfield__label" for="luj_2">Doble</label>
                                </div>
                            </div>
                            <h3>El costo del paquete incluye</h3>
                            <div class="col-xs-12 js-input">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label js-color">
                                    <textarea rows="3" class="mdl-textfield__input" type="text" id="desc_incluye"></textarea>
                                    <label class="mdl-textfield__label" for="desc_incluye">Descripcion</label>
                                </div>
                            </div>
                            <button id="btnIncluye" onclick="agregarIncluye()"
                                class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                                Agregar
                            </button>
                            <table id="tab_incluye" class="table table-bordered table-hover dt-responsive" cellspacing="0" width="100%">
                                <thead>
                                    <tr class="tr-header-reporte">
                                        <th class="text-left" style="color: black !important;">Descripción</th>
                                        <th class="text-left" style="color: black !important;">Acción</th>
                                    </tr>
                                </thead>
                                <tbody id="cont_tabla_incluye">
                                </tbody>
                            </table>
                            <h3>El costo del paquete NO incluye</h3>
                            <div class="col-xs-12 js-input">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label js-color">
                                    <textarea rows="3" class="mdl-textfield__input" type="text" id="desc_no_incluye"></textarea>
                                    <label class="mdl-textfield__label" for="desc_no_incluye">Descripcion</label>
                                </div>
                            </div>
                            <button id="btnNoIncluye" onclick="agregarNoIncluye()"
                                class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                                Agregar
                            </button>
                            <table id="tab_no_incluye" class="table table-bordered table-hover dt-responsive" cellspacing="0" width="100%">
                                <thead>
                                    <tr class="tr-header-reporte">
                                        <th class="text-left" style="color: black !important;">Descripción</th>
                                        <th class="text-left" style="color: black !important;">Acción</th>
                                    </tr>
                                </thead>
                                <tbody id="cont_tabla_no_incluye">
                                </tbody>
                            </table>
                        </div>
                        <div class="mdl-card__actions">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-button--default" data-dismiss="modal">Cancelar</button>
                            <button id="btnEditarPrecio" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-button--color" onclick="editarPrecio()">Confirmar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form id="frmArchivo" method="post" style="display: none;">
            <input id="archivo" type="file" name="archivo" />
            <input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>
            <input class="boton" type="submit" name="enviar" value="Importar" style="display: none" />
        </form>
        <form id="frmArchivoOff" method="post" style="display: none;">
            <input id="archivoOff" type="file" name="archivoOff" />
            <input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>
            <input class="boton" type="submit" name="enviar" value="Importar" style="display: none" />
        </form>
        <script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>owl-carousel/owl.carousel.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.5/jszip.min.js"></script>
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
        $(document).ready(function() {
          $('#example').DataTable( {
                searching : false,
                dom: 'Bfrtip',
                language:{
                    "emptyTable":     "Aucune donnée disponible",
                    "info" : "Mostrando _END_ de _TOTAL_ resultados"
                },
                lengthMenu: [
                    [ 10, 25, 50, -1 ],
                    [ '10 resultados', '25 resultados', '50 resultados']
                ],
                buttons: [{
                        text: 'Mostrar 10 resultados',
                        extend: 'pageLength'
                    }/*,
                    {
                        extend:'excel',
                        text: 'Exportar a Excel'
                    }*/
                ]
            });
          $('.buttons-excel').empty();
          $('.buttons-print').empty();
          //$('.buttons-excel').append('<i class="fa fa-download"></i>');
          $('.buttons-print').append('<i class="fa fa-print"></i>');
      });
        </script>
    </body>
</html>