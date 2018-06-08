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
        <div id="home">
            <!-- <div class="js-header">
                <div class="container text-right">
                    <div class="redes-header">
                        <ul>
                            <li class="border"><a href="tel:+51997725464"><i class="fa fa-phone same m-r-10"></i>997725464</a></li>
                            <li class="border"><a href="mailto:latintravelpe@yahoo.com"><i class="fa fa-envelope same m-r-10"></i>latintravelpe@yahoo.com</a></li>
                        </ul>
                    </div>
                </div>
            </div> -->
            <nav class="navbar navbar-default js-header--fixed">
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
                            <li><a href="Home#nosotros" class="link">Nosotros</a></li>
                            <li><a href="Home#experiencia" class="link">Experiencias</a></li>
                            <li><a href="Home#contactanos" class="link">Escr&iacute;benos</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer">
            <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">Nuestros Paquetes</span>
                <nav class="mdl-navigation">
                    <a id="paquete1" class="mdl-navigation__link" onclick="goToMenu(this.id)">Cusco Machupicchu</a>
                    <a id="paquete2" class="mdl-navigation__link" onclick="goToMenu(this.id)">Cusco Aventurero</a>
                    <a id="paquete3" class="mdl-navigation__link" onclick="goToMenu(this.id)">Cusco Camino Inca</a>
                    <a id="paquete4" class="mdl-navigation__link" onclick="goToMenu(this.id)">Arequipa</a>
                    <a id="paquete5" class="mdl-navigation__link" onclick="goToMenu(this.id)">Lima</a>
                    <a id="paquete6" class="mdl-navigation__link" onclick="goToMenu(this.id)">Tambopata</a>
                </nav>
            </div>
            <main class="mdl-layout__content">
                <section id="section-paquete1" class="section js-paquete">
                    <div class="js-container">
                        <h2 class="js-title">Cusco amanecer en Machu Picchu</h2>
                        <p>LIMA - CUSCO – MAHU PICCHU - CUZCO - LIMA</p>
                        <p>7 DIAS / 6 NOCHES</p>
                        <div class="js-paquete--contenido">
                            <h2>Cusco</h2>
                            <p>Antigua capital del imperio incaico, fue declarada Patrimonio Cultural de la Humanidad por la UNESCO en 1983 y es sin duda uno de los destinos m&aacute;s importantes del Per&uacute;. Entre sus calles empedradas se descubren edificios de construcci&oacute;n inca, como el Koricancha y el Palacio de Inca Roca, junto a construcciones coloniales de estilo barroco andino, como la Catedral y la iglesia de la Compa&ntilde;ia; adem&aacute;s se puede visitar el pintoresco barrio de San Blas, donde se encuentran los talleres de los mejores artesanos del departamento. Esta m&aacute;gica ciudad cuenta adem&aacute;s con una excitante vida nocturna y con caf&eacute;s, restaurantes y bares para todos los gustos. A diez minutos de la ciudad se levantan las gigantescas murallas de la fortaleza de Sacsayhuamán. Unos kilómetros más lejos, se encuentran los sitios arqueológicos de Qenko, Pukapukara y Tambomachay, construcciones incas edificadas totalmente en piedra.</p>
                            <h2>Machu Picchu</h2>
                            <p>Machu Picchu que se encuentra a 110 Km. al noroeste de la ciudad del Cusco (4 horas en tren),es una impresionante ciudadela inca enclavada en una montaña pintoresca. Su nombre traducido al español significa "Montaña Vieja". También se le ha llamado "la Ciudad Perdida de los Incas", pues fue abandonado por casi cuatro siglos hasta que fue descubierta para Occidente por Hiram Bingham en 1911. En el año 2008 Machu Picchu fue elegida vía votación mundial por Internet entra las 7 maravillas de mundo.</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>DIA 1</th>
                                            <th>ARRIBO EN LIMA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>Traslado aeropuerto al hotel elegido, instalación. Pernocte.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>DIA 2</th>
                                            <th>LIMA: CITY TOUR</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>Desayuno en el hotel. City Tour por la ciudad de Lima, recorrido por sus encantos virreinales, incluyendo la Plaza Mayor, la Catedral, el Palacio de Gobierno. Luego se ingresara al Convento de San Francisco donde se podrá apreciar sus joyas arquitectónicas y pinturas de la escuela Cuzqueña, para luego recorrer las Catacumbas situadas debajo del convento. Mas tarde traslado al moderno distrito de Miraflores donde se apreciará el Parque del Amor desde donde se tendrá una espectacular vista de las Playas de la Costa Verde. Por la tarde almuerzo.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>DIA 3</th>
                                            <th>CUSCO:  CITY TOUR, TOUR A LAS RUINAS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>Desayuno en el hotel, traslado al aeropuerto para el vuelo de Lima – Cuzco, Llegada a Cuzco, recepción y traslado al Hotel, por la tarde recorrido por la ciudad (City Tour), visitando los atractivos Turísticos, como La Plaza de Armas, Catedral, Koricancha, etc., luego visita las cuatro ruinas cercanas de la ciudad: Sacsayhuaman, Qenqo, Puca Pucara y Tambomachay, retorno al Hotel.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>DIA 4</th>
                                            <th>CUSCO – MACHU PICCHU: UNA DE LAS 7 MARAVILLAS MODERNAS DEL MUNDO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>Desayuno en el Hotel, traslado a la estación de tren, viaje por aprox. 3 horas y media en tren turista. Llegada al distrito de Aguas Caliente. Subida a la explanada de la ciudadela de Machu Picchu, visita guiada por las principales edificaciones. Vista de los panoramas inolvidables del Machu Picchu y Wayna Picchu. Pernocte en el hotel elegido en Aguas Calientes.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>DIA 5</th>
                                            <th>MACHU PICCHU – CUSCO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>Desayuno en el Hotel elegido en Aguas Calientes. Mañana libre para descansar ò visitar por segundo día las ruinas de Machu Picchu para aprovechar de las majestuosas vistas al máximo a las horas de la mañana. Retorno a la ciudad de Cusco y traslado al Hotel de Cusco. Pernocte.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>DIA 6</th>
                                            <th>CUSCO – VALLE SAGRADO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>Desayuno en el Hotel Full Day al Valle Sagrado de los Incas, en cuyo trayecto se visitaran los poblados Calca, Lamay, el mercado Indio de Pisaq, almuerzo Buffet incluido en Restaurante Hotel Sonesta Yucay de Urubamba, por la tarde se visita la fortaleza Ollantaytambo, en retorno a Cusco visita al poblado Indio de Chincheros.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>DIA 7</th>
                                            <th>CUSCO – LIMA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>Desayuno en el Hotel.Traslado al Aeropuerto para su vuelo Cusco – Lima</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h2>Hoteles sugeridos en el Per&uacute;</h2>
                            <div class="js-hoteles">
                                <h2>LIMA</h2>
                                <p>Hotel el Ducado (3***)</p>
                                <a href="https://hotels.cloudbeds.com/en/reservas/FXlNzT#checkin=2018-07-06&checkout=2018-07-07" target="_blank">www.ducado.pe</a>
                                <p>Colon Hotel (4****)</p>
                                <a href="https://www.miraflorescolonhotel.com/" target="_blank">www.miraflorescolonhotel.com/</a>
                                <p>Hotel Marriott (5*****)</p>
                                <a href="https://www.espanol.marriott.com/default.mi" target="_blank">www.espanol.marriott.com</a>
                            </div>
                            <div class="js-hoteles">
                                <h2>Cusco</h2>
                                <p>LP Los Portales Hotel Cusco (3***)</p>
                                <a href="http://www.losportaleshoteles.com.pe/error?aspxerrorpath=/hotel/cusco/" target="_blank">www.losportaleshoteles.com.pe/hotel/cusco/</a>
                                <p>San Agustin Cusco Plaza (4****)</p>
                                <a href="http://www.hotelessanagustin.com.pe/es/hoteles/plaza-cusco/" target="_blank">www.hotelessanagustin.com.pe/es/hoteles/plaza-cusco/</a>
                                <p>Casa Andina Premium Cusco (5*****)</p>
                                <a href="http://www.casaandina.com/" target="_blank">www.casaandina.com</a>
                            </div>
                            <div class="js-hoteles">
                                <h2>Machu Picchu</h2>
                                <p>Machu Picchu Santuario (3***)</p>
                                <a href="http://www.machupicchus.com/" target="_blank">www.machupicchus.com/</a>
                                <p>El Mapi Hotel Machu Picchu (4****)</p>
                                <a href="http://www.inkaterra.com/es/byinkaterra/el-mapi-hotel/" target="_blank">www.inkaterra.com/es/byinkaterra/el-mapi-hotel/</a>
                                <p>Sumaq Luxury (5*****)</p>
                                <a href="http://www.machupicchuhotels-sumaq.com/" target="_blank">www.sumaqhotelperu.com</a>
                            </div>
                            <div class="js-costo">
                                <p>El costo del paquete <span>CUSCO IMPERIAL, AMANECER EN MACHUPICCHU (7 DIAS / 6 NOCHES)</span> incluye:</p>
                                <ul>
                                    <li>Boleto aéreo Lima – Cusco – Lima</li>
                                    <li>Traslado del aeropuerto al hotel en Lima </li>
                                    <li>2 Noches de Alojamiento con desayunos en Lima </li>
                                    <li>Tours en Lima: City Tour, visita a los museos arqueol&oacute;gico</li>
                                    <li>Almuerzo</li>
                                    <li>Traslado del Aeropuerto al hotel en Cusco </li>
                                    <li>3 Noches de alojamiento con desayunos en Cusco</li>
                                    <li>1 Noche de alojamiento en Machu Pichhu con desayuno</li>
                                    <li>Tours en Cusco: City Tour, excursi&oacute;n a las ruinas aleda&ntilde;as</li>
                                    <li>Excursi&oacute;n al Valle Sagrado de los Incas con almuerzo buffet</li>
                                    <li>Excursi&oacute;n a Machu Picchu en tren y almuerzo buffet </li>
                                    <li>Gu&iacute;a tur&iacute;stica y entradas a los centros arqueol&oacute;gicos</li>
                                </ul>
                                <p>El paquete del costo no incluye</p>
                                <ul>
                                    <li>Boleto a&eacute;reo Europa - Per&uacute; – Europa</li>
                                    <li>Almuerzos y cenas se&ntilde;aladas en el programa</li>
                                    <li>Impuestos de Aeropuerto</li>
                                </ul>
                                <h2>PRECIO POR PERSONA EN USD</h2>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>CAT. HOTEL</th>
                                                <th>SIMPLE</th>
                                                <th>DOBLE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Económica 3***</td>
                                                <td>$ 1199</td>
                                                <td>$ 999</td>
                                            </tr>
                                            <tr>
                                                <td>Superior 4****</td>
                                                <td>$ 1399</td>
                                                <td>$ 1259</td>
                                            </tr>
                                            <tr>
                                                <td>Lujo 5*****</td>
                                                <td>$ 2399</td>
                                                <td>$ 1799</td>
                                            </tr>
                                        </tbody>
                                    </table>   
                                </div>
                                <small>* Tarifas sujetos a disponibilidad de espacio.</small>
                            </div>
                        </div>
                    </div>                    
                </section>
                <section id="section-paquete2" class="section js-paquete js-section--menu js-opacity-done">
                    <div class="js-container">
                        <h2 class="js-title">Cusco Aventurero</h2>
                        <p>CUSCO – MACHU PICCHU</p>
                        <p>5 DIAS / 4 NOCHES</p>
                        <div class="js-paquete--contenido">
                            <h2>Cusco</h2>
                            <p>Antigua capital del imperio incaico, fue declarada Patrimonio Cultural de la Humanidad por la UNESCO en 1983 y es sin duda uno de los destinos m&aacute;s importantes del Per&uacute;. Entre sus calles empedradas se descubren edificios de construcci&oacute;n inca, como el Koricancha y el Palacio de Inca Roca, junto a construcciones coloniales de estilo barroco andino, como la Catedral y la iglesia de la Compa&ntilde;ia; adem&aacute;s se puede visitar el pintoresco barrio de San Blas, donde se encuentran los talleres de los mejores artesanos del departamento. Esta m&aacute;gica ciudad cuenta adem&aacute;s con una excitante vida nocturna y con caf&eacute;s, restaurantes y bares para todos los gustos. A diez minutos de la ciudad se levantan las gigantescas murallas de la fortaleza de Sacsayhuamán. Unos kilómetros más lejos, se encuentran los sitios arqueológicos de Qenko, Pukapukara y Tambomachay, construcciones incas edificadas totalmente en piedra.</p>
                            <h2>Machu Picchu</h2>
                            <p>Machu Picchu que se encuentra a 110 Km. al noroeste de la ciudad del Cusco (4 horas en tren),es una impresionante ciudadela inca enclavada en una montaña pintoresca. Su nombre traducido al español significa "Montaña Vieja". También se le ha llamado "la Ciudad Perdida de los Incas", pues fue abandonado por casi cuatro siglos hasta que fue descubierta para Occidente por Hiram Bingham en 1911. En el año 2008 Machu Picchu fue elegida vía votación mundial por Internet entra las 7 maravillas de mundo.</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>DIA 1</th>
                                            <th>CUSCO:  CITY TOUR, TOUR A LAS RUINAS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>Recepci&oacute;n en el aeropuerto, traslado al hotel elegido y acomodación, por la tarde se realizara City Tour.- Los lugares a visitar son: Templo del Sol Qoricancha, La Catedral, Sayahuaman, Quenqo,  Pucapucara, Tambomachay. Pernocte. Visita opcional centro cultural  QOSQO de arte nativo. Retorno al hotel.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>DIA 2</th>
                                            <th>MONTAÑA DE SIETE COLORES "VINICUNCA"</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>DLa aventura empieza muy temprano, a las 03:00 am recogemos de su hotel para luego dirigirnos al pintoresco pueblo de Pitumarca al sur de la ciudad de Cusco. Lugar donde tendremos el Desayuno. Luego de esta corta parada, continuaremos nuestro viaje donde observaremos los paisajes multicolores y cultivos que se mezclan entre las misteriosas montañas y nevados, animales andinos como la llama, alpaca, ovejas y los profundos valles. Llegaremos a (Chiripampa) punto de inicio de nuestra caminata por 02 horas montaña arriba por un sendero que poco a poco ira cambiando el panorama entre montañas de colores intensos y pequeños arroyos de agua helada que alimentan y dan vida a este valle, a medida vayamos caminando observaremos cómo los colores de nuestro alrededor irán cambiando, llegaremos a una altura de 5033 msnm. Cima de la misteriosa montaña de 7 colores (Vinicunca). Este será el punto donde tendremos tiempo suficiente para poder realizar la toma de fotos, vídeos, etc. A la vez será el lugar donde disfrutaremos de nuestro refrigerio mientras nuestra vista se deleita con la magia que encierran las montañas tras su velo de nubes y picos nevados, luego de tan exquisita experiencia emprenderemos la caminata de retorno hacia Chiripamba y luego al poblado de Pitumarca lugar donde disfrutaremos del almuerzo y posteriormente retornaremos a Cusco. Llegando alrededor de las 15.00 horas, así culminamos la caminata y aventura a la montaña de 7 colores.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>DIA 3</th>
                                            <th>CUSCO – VALLE SAGRADO DE LOS INCAS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>Desayuno en el Hotel ,Full Day al Valle Sagrado de los Incas, en cuyo trayecto se visitaran los poblados Calca, Lamay, el mercado Indio de Pisaq, almuerzo Buffet incluido en Restaurante Hotel Sonesta Yucay de Urubamba, por la tarde se visita la fortaleza Ollantaytambo, en retorno a Cusco visita al poblado Indio de Chincheros.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>DIA 4</th>
                                            <th>CUSCO – MACHU PICCHU: UNA DE LAS 7 MARAVILLAS MODERNAS DEL MUNDO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>Desayuno en el hotel, Salida a la estación de trenes allí abordaremos el Tren que nos conducirá a Aguas Calientes, pueblo más cercano a la Ciudadela de Machupicchu, que se encuentra rodeado de montañas y que hacen al lugar simplemente hermoso. Tour a Machupicchu, abordaremos el bus de Aguas Calientes hasta el santuario de Machupicchu, que tomara aproximadamente 30 minutos de viaje. Machu Picchu fue edificado antes del siglo XV en el promontorio rocoso que enlaza las montañas Machu Picchu y Huayna Picchu en la vertiente oriental de la cordillera Central a 2490msnm, altitud de su plaza principal. Es considerado al mismo tiempo una obra maestra de la arquitectura y la ingeniería. Tendremos una visita guiada por 2 horas aproximadamente en una de las Maravillas del Mundo apreciando toda la magia de la Ciudadela Inca: la Plaza Principal donde todas las evidencias indican que el lugar estuvo destinado a diferentes rituales, la Torre Circular, el Sagrado Reloj Solar y los Cuartos Reales, tendrá tiempo para un paseo libre por la ciudadela, retornaremos en bus hasta el pueblo de Aguas Calientes, almuerzo buffet. Por la tarde a la hora indicada tomaremos el tren de  retorno, luego traslado al hotel. Pernocte.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>DIA 5</th>
                                            <th>CUSCO – LIMA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>Desayuno, tiempo libre para hacer sus compras, a una hora apropiada traslado al aeropuerto</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h2>Hoteles en cusco</h2>
                            <div class="js-hoteles">
                                <h2>Cusco</h2>
                                <p>LP Los Portales Hotel Cusco (3***)</p>
                                <a href="http://www.losportaleshoteles.com.pe/error?aspxerrorpath=/hotel/cusco/" target="_blank">www.losportaleshoteles.com.pe/hotel/cusco/</a>
                                <p>San Agustin Cusco Plaza (4****)</p>
                                <a href="http://www.hotelessanagustin.com.pe/es/hoteles/plaza-cusco/" target="_blank">www.hotelessanagustin.com.pe/es/hoteles/plaza-cusco/</a>
                                <p>Casa Andina Premium Cusco (5*****)</p>
                                <a href="http://www.casaandina.com/" target="_blank">www.casaandina.com</a>
                            </div>
                            <div class="js-costo">
                                <p>El costo del paquete <span>CUSCO AVENTURERO (5 DIAS / 4 NOCHES)</span> incluye:</p>
                                <ul>
                                    <li>Boleto aéreo Lima – Cusco – Lima</li>
                                    <li>Traslado del aeropuerto al hotel en Cusco</li>
                                    <li>4 Noches de Alojamiento con desayunos en Cusco</li>
                                    <li>Tours en Cusco: City Tour, excursi&oacute;n a las ruinas aleda&ntilde;as</li>
                                    <li>Tour Montaña de siete colores "VINICUNCA"</li>
                                    <li>Excursi&oacute;n al Valle Sagrado de los Incas con almuerzo buffet</li>
                                    <li>Excursi&oacute;n a Machu Picchu en tren y almuerzo buffet </li>
                                    <li>Gu&iacute;a tur&iacute;stica y entradas a los centros arqueol&oacute;gicos</li>
                                </ul>
                                <p>El paquete del costo no incluye</p>
                                <ul>
                                    <li>Almuerzos y cenas se&ntilde;aladas en el programa</li>
                                    <li>Impuestos de Aeropuerto</li>
                                </ul>
                                <h2>PRECIO POR PERSONA EN USD</h2>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>CAT. HOTEL</th>
                                                <th>SIMPLE</th>
                                                <th>DOBLE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Económica 3***</td>
                                                <td>$ 959</td>
                                                <td>$ 869</td>
                                            </tr>
                                            <tr>
                                                <td>Superior 4****</td>
                                                <td>$ 1099</td>
                                                <td>$ 989</td>
                                            </tr>
                                            <tr>
                                                <td>Lujo 5*****</td>
                                                <td>$ 1499</td>
                                                <td>$ 1199</td>
                                            </tr>
                                        </tbody>
                                    </table>   
                                </div>
                                <small>* Tarifas sujetos a disponibilidad de espacio.</small>
                                <h3>RECOMENDACIONES E INDICACIONES:</h3>
                                <p>Traer crema bloqueadora para el sol, gorra, lentes de sol, c&aacute;mara fotogr&aacute;fica, impermeable para la lluvia y abrigo para las tardes.</p>
                            </div>
                        </div>
                    </div>                    
                </section>
                <section id="section-paquete3" class="section js-paquete js-section--menu js-opacity-done">
                    <div class="js-container">
                        <h2 class="js-title">Cusco Camino Inca</h2>
                        <p>5 DIAS / 4 NOCHES</p>
                        <div class="js-paquete--contenido">
                            <h2>Camino Inka </h2>
                            <p>Camino Inka ofrece a los visitantes una variedad de nevados, r&iacute;os y una gran fauna y flora. A todas estas maravillas naturales se suman construcciones Incas que son dignas de visitar, el arte arquitect&oacute;nico armoniza perfectamente con el entorno natural. Los 39 kil&ocute;metros del Camino Inca fueron una ruta de peregrinaci&oacute;n cuyo destino final fue la Ciudad Sagrada de "Machupicchu". Hacer esta expedici&oacute;n demanda de esfuerzo f&iacute;sico por lo que sugerimos tener la preparaci&oacute;n f&iacute;sica adecuada y llegar a Cusco al menos 02 d&iacute;as antes del inicio del tour. El punto m&aacute;s alto a lo largo del camino es de 4.200 m.s.n.m.</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>DIA 1</th>
                                            <th>CUSCO:  CITY TOUR, TOUR A LAS RUINAS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>Recepci&oacute;n en el aeropuerto, traslado al hotel elegido y acomodación, por la tarde se realizara City Tour.- Los lugares a visitar son: Templo del Sol Qoricancha, La Catedral, Sayahuaman, Quenqo,  Pucapucara, Tambomachay. Pernocte. Visita opcional centro cultural  QOSQO de arte nativo. Retorno al hotel.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>DIA 2</th>
                                            <th>MONTAÑA DE SIETE COLORES "VINICUNCA"</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>DLa aventura empieza muy temprano, a las 03:00 am recogemos de su hotel para luego dirigirnos al pintoresco pueblo de Pitumarca al sur de la ciudad de Cusco. Lugar donde tendremos el Desayuno. Luego de esta corta parada, continuaremos nuestro viaje donde observaremos los paisajes multicolores y cultivos que se mezclan entre las misteriosas montañas y nevados, animales andinos como la llama, alpaca, ovejas y los profundos valles. Llegaremos a (Chiripampa) punto de inicio de nuestra caminata por 02 horas montaña arriba por un sendero que poco a poco ira cambiando el panorama entre montañas de colores intensos y pequeños arroyos de agua helada que alimentan y dan vida a este valle, a medida vayamos caminando observaremos cómo los colores de nuestro alrededor irán cambiando, llegaremos a una altura de 5033 msnm. Cima de la misteriosa montaña de 7 colores (Vinicunca). Este será el punto donde tendremos tiempo suficiente para poder realizar la toma de fotos, vídeos, etc. A la vez será el lugar donde disfrutaremos de nuestro refrigerio mientras nuestra vista se deleita con la magia que encierran las montañas tras su velo de nubes y picos nevados, luego de tan exquisita experiencia emprenderemos la caminata de retorno hacia Chiripamba y luego al poblado de Pitumarca lugar donde disfrutaremos del almuerzo y posteriormente retornaremos a Cusco. Llegando alrededor de las 15.00 horas, así culminamos la caminata y aventura a la montaña de 7 colores.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>DIA 3</th>
                                            <th>CUSCO – VALLE SAGRADO DE LOS INCAS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>Desayuno en el Hotel ,Full Day al Valle Sagrado de los Incas, en cuyo trayecto se visitaran los poblados Calca, Lamay, el mercado Indio de Pisaq, almuerzo Buffet incluido en Restaurante Hotel Sonesta Yucay de Urubamba, por la tarde se visita la fortaleza Ollantaytambo, en retorno a Cusco visita al poblado Indio de Chincheros.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>DIA 4</th>
                                            <th>CUSCO – MACHU PICCHU: UNA DE LAS 7 MARAVILLAS MODERNAS DEL MUNDO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>Desayuno en el hotel, Salida a la estación de trenes allí abordaremos el Tren que nos conducirá a Aguas Calientes, pueblo más cercano a la Ciudadela de Machupicchu, que se encuentra rodeado de montañas y que hacen al lugar simplemente hermoso. Tour a Machupicchu, abordaremos el bus de Aguas Calientes hasta el santuario de Machupicchu, que tomara aproximadamente 30 minutos de viaje. Machu Picchu fue edificado antes del siglo XV en el promontorio rocoso que enlaza las montañas Machu Picchu y Huayna Picchu en la vertiente oriental de la cordillera Central a 2490msnm, altitud de su plaza principal. Es considerado al mismo tiempo una obra maestra de la arquitectura y la ingeniería. Tendremos una visita guiada por 2 horas aproximadamente en una de las Maravillas del Mundo apreciando toda la magia de la Ciudadela Inca: la Plaza Principal donde todas las evidencias indican que el lugar estuvo destinado a diferentes rituales, la Torre Circular, el Sagrado Reloj Solar y los Cuartos Reales, tendrá tiempo para un paseo libre por la ciudadela, retornaremos en bus hasta el pueblo de Aguas Calientes, almuerzo buffet. Por la tarde a la hora indicada tomaremos el tren de  retorno, luego traslado al hotel. Pernocte.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>DIA 5</th>
                                            <th>CUSCO – LIMA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>Desayuno, tiempo libre para hacer sus compras, a una hora apropiada traslado al aeropuerto</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h2>Hoteles en cusco</h2>
                            <div class="js-hoteles">
                                <h2>Cusco</h2>
                                <p>LP Los Portales Hotel Cusco (3***)</p>
                                <a href="http://www.losportaleshoteles.com.pe/error?aspxerrorpath=/hotel/cusco/" target="_blank">www.losportaleshoteles.com.pe/hotel/cusco/</a>
                                <p>San Agustin Cusco Plaza (4****)</p>
                                <a href="http://www.hotelessanagustin.com.pe/es/hoteles/plaza-cusco/" target="_blank">www.hotelessanagustin.com.pe/es/hoteles/plaza-cusco/</a>
                                <p>Casa Andina Premium Cusco (5*****)</p>
                                <a href="http://www.casaandina.com/" target="_blank">www.casaandina.com</a>
                            </div>
                            <div class="js-costo">
                                <p>El costo del paquete <span>CUSCO AVENTURERO (5 DIAS / 4 NOCHES)</span> incluye:</p>
                                <ul>
                                    <li>Boleto aéreo Lima – Cusco – Lima</li>
                                    <li>Traslado del aeropuerto al hotel en Cusco</li>
                                    <li>4 Noches de Alojamiento con desayunos en Cusco</li>
                                    <li>Tours en Cusco: City Tour, excursi&oacute;n a las ruinas aleda&ntilde;as</li>
                                    <li>Tour Montaña de siete colores "VINICUNCA"</li>
                                    <li>Excursi&oacute;n al Valle Sagrado de los Incas con almuerzo buffet</li>
                                    <li>Excursi&oacute;n a Machu Picchu en tren y almuerzo buffet </li>
                                    <li>Gu&iacute;a tur&iacute;stica y entradas a los centros arqueol&oacute;gicos</li>
                                </ul>
                                <p>El paquete del costo no incluye</p>
                                <ul>
                                    <li>Almuerzos y cenas se&ntilde;aladas en el programa</li>
                                    <li>Impuestos de Aeropuerto</li>
                                </ul>
                                <h2>PRECIO POR PERSONA EN USD</h2>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>CAT. HOTEL</th>
                                                <th>SIMPLE</th>
                                                <th>DOBLE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Económica 3***</td>
                                                <td>$ 959</td>
                                                <td>$ 869</td>
                                            </tr>
                                            <tr>
                                                <td>Superior 4****</td>
                                                <td>$ 1099</td>
                                                <td>$ 989</td>
                                            </tr>
                                            <tr>
                                                <td>Lujo 5*****</td>
                                                <td>$ 1499</td>
                                                <td>$ 1199</td>
                                            </tr>
                                        </tbody>
                                    </table>   
                                </div>
                                <small>* Tarifas sujetos a disponibilidad de espacio.</small>
                                <h3>RECOMENDACIONES E INDICACIONES:</h3>
                                <p>Traer crema bloqueadora para el sol, gorra, lentes de sol, c&aacute;mara fotogr&aacute;fica, impermeable para la lluvia y abrigo para las tardes.</p>
                            </div>
                        </div>
                    </div>                    
                </section>
            </main>
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