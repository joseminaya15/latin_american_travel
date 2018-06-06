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
                        <a class="navbar-brand logo link" href="#principal"><img src="<?php echo RUTA_IMG?>logo/logo.png"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="offer" class="link">Ofertas</a></li>
                            <li><a href="Package" class="link">Paquetes</a></li>
                            <li><a href="#nosotros" class="link">Nosotros</a></li>
                            <li><a href="#experiencia" class="link">Experiencias</a></li>
                            <li><a href="#contactanos" class="link">Escr&iacute;benos</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <section id="principal">
                <div class="fondo-responsive"></div>
                <div class="cont-carousel">
                    <div class="cont-carousel__contenido">
                        <h2>Vive la mejor experiencia, Encuentra las mejores ofertas para ti.</h2>
                        <div class="js-search">
                            <input type="text" class="form-control" placeholder="Busca tu destino ideal" id="texto" onkeypress="verificarDatos(event);">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="buscarOferta()">BUSCAR</button>
                        </div>
                    </div>
                </div>
                <div class="cont-redes">
                    <p>S&iacute;guenos</p>
                    <a class="mdl-button mdl-js-button mdl-button--fab"><i class="fa fa-facebook"></i></a>
                    <a class="mdl-button mdl-js-button mdl-button--fab"><i class="fa fa-instagram"></i></a>
                </div>
            </section>
        </div>
        <section id="ofertas" class="section">
            <div class="js-container">
                <h2 class="js-title">Mejores Ofertas</h2>
                <div class="js-flex ofertas-insert">
                    <div class="mdl-card mdl-paquetes">
                        <div class="mdl-card__title p-0">
                            <button id="button10" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="goToPaquete(this.id)">Ver m&aacute;s</button>
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
                    <div class="mdl-card mdl-paquetes">
                        <div class="mdl-card__title p-0">
                            <button id="button11" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="goToPaquete(this.id)">Ver m&aacute;s</button>
                            <img src="<?php echo RUTA_IMG?>paquetes/paquete2.jpg" alt="">
                            <div class="js-paquete-name">
                                <p>3 partidos</p>   
                            </div>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <div class="js-paquetes location">
                                <i class="mdi mdi-location_on"></i>
                                <span>Kazan - Saransk -Ekaterimburgo - Sochi</span>
                            </div>
                            <div class="js-paquetes">
                                <i class="mdi mdi-date_range"></i>
                                <span>14 Días y 13 Noches</span>
                            </div>
                            <div class="js-contenido">
                                <p>Es una ciudad que lleva acumulando historia desde su fundación en el siglo XII, periodos históricos forman parte de la excurisión.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-card mdl-paquetes">
                        <div class="mdl-card__title p-0">
                            <button id="button12" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="goToPaquete(this.id)">Ver m&aacute;s</button>
                            <img src="<?php echo RUTA_IMG?>paquetes/paquete1.jpeg" alt="">
                            <div class="js-paquete-name">
                                <p>Anillo Dorado del Per&uacute;</p>   
                            </div>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <div class="js-paquetes location">
                                <i class="mdi mdi-location_on"></i>
                                <span>Lima -Cusco (Machu Picchu) - Puno (Valle del Colca) - Arequipa - Paracas - Nazca -Lima</span>
                            </div>
                            <div class="js-paquetes">
                                <i class="mdi mdi-date_range"></i>
                                <span>14 Días y 13 Noches</span>
                            </div>
                            <div class="js-contenido">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="paquetes" class="section">
            <div class="js-container">
                <h2 class="js-title">Nuestros paquetes</h2>
                <div class="js-flex paquetes-insert">
                    <div class="mdl-card mdl-ofertas">
                        <div class="mdl-card__title p-0">
                            <div class="fondo-oferta oferta1">
                                <button id="button1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openModalOferta(this.id)">Ver m&aacute;s</button>
                            </div>
                            <div class="js-paquete-name">
                                <p>Machu Picchu</p>   
                            </div>
                        </div>
                        <div class="modal-paquete" style="display: none;">
                            <strong>Cusco:</strong>
                            <p>Antigua capital del imperio incaico, fue declarada Patrimonio Cultural de la Humanidad por la UNESCO en 1983 y es sin duda uno de los destinos más importantes del Perú.  Entre sus calles empedradas se descubren edificios de construcción inca, como el Koricancha y el Palacio de Inca Roca, junto a construcciones coloniales de estilo| barroco andino, como la Catedral y la iglesia de la Compañia; además se puede visitar el pintoresco barrio de San Blas, donde se encuentran los talleres de los mejores artesanos del departamento. Esta mágica ciudad cuenta además con una excitante vida nocturna y con cafés, restaurantes y bares para todos los gustos. A diez minutos de la ciudad se levantan las gigantescas murallas de la fortaleza de Sacsayhuamán. Unos kilómetros más lejos, se encuentran los sitios arqueológicos de Qenko, Pukapukara y Tambomachay, construcciones incas edificadas totalmente en piedra.</p>
                            <strong>Machu Picchu</strong>
                            <p>Machu Picchu que se encuentra a 110 Km. al noroeste de la ciudad del Cusco (4 horas en tren),es una impresionante ciudadela inca enclavada en una montaña pintoresca. Su nombre traducido al español significa "Montaña Vieja". También se le ha llamado "la Ciudad Perdida de los Incas", pues fue abandonado por casi cuatro siglos hasta que fue descubierta para Occidente por Hiram Bingham en 1911. En el año 2008 Machu Picchu fue elegida vía votación mundial por Internet entra las 7 maravillas de mundo.</p>
                        </div>
                    </div>
                    <div class="mdl-card mdl-ofertas">
                        <div class="mdl-card__title p-0">
                            <div class="fondo-oferta oferta2">
                                <button id="button2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openModalOferta(this.id)">Ver m&aacute;s</button>
                            </div>
                            <div class="js-paquete-name">
                                <p>Ica</p>   
                            </div>
                        </div>
                        <div class="modal-paquete" style="display: none;">
                            <strong>Cusco:</strong>
                            <p>Antigua capital del imperio incaico, fue declarada Patrimonio Cultural de la Humanidad por la UNESCO en 1983 y es sin duda uno de los destinos más importantes del Perú.  Entre sus calles empedradas se descubren edificios de construcción inca, como el Koricancha y el Palacio de Inca Roca, junto a construcciones coloniales de estilo| barroco andino, como la Catedral y la iglesia de la Compañia; además se puede visitar el pintoresco barrio de San Blas, donde se encuentran los talleres de los mejores artesanos del departamento. Esta mágica ciudad cuenta además con una excitante vida nocturna y con cafés, restaurantes y bares para todos los gustos. A diez minutos de la ciudad se levantan las gigantescas murallas de la fortaleza de Sacsayhuamán. Unos kilómetros más lejos, se encuentran los sitios arqueológicos de Qenko, Pukapukara y Tambomachay, construcciones incas edificadas totalmente en piedra.</p>
                            <strong>Machu Picchu</strong>
                            <p>Machu Picchu que se encuentra a 110 Km. al noroeste de la ciudad del Cusco (4 horas en tren),es una impresionante ciudadela inca enclavada en una montaña pintoresca. Su nombre traducido al español significa "Montaña Vieja". También se le ha llamado "la Ciudad Perdida de los Incas", pues fue abandonado por casi cuatro siglos hasta que fue descubierta para Occidente por Hiram Bingham en 1911. En el año 2008 Machu Picchu fue elegida vía votación mundial por Internet entra las 7 maravillas de mundo.</p>
                        </div>
                    </div>
                    <div class="mdl-card mdl-ofertas">
                        <div class="mdl-card__title p-0">
                            <div class="fondo-oferta oferta3">
                                <button id="button3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openModalOferta(this.id)">Ver m&aacute;s</button>
                            </div>
                            <div class="js-paquete-name">
                                <p>Arequipa</p>   
                            </div>
                        </div>
                        <div class="modal-paquete" style="display: none;">
                            <strong>Cusco:</strong>
                            <p>Antigua capital del imperio incaico, fue declarada Patrimonio Cultural de la Humanidad por la UNESCO en 1983 y es sin duda uno de los destinos más importantes del Perú.  Entre sus calles empedradas se descubren edificios de construcción inca, como el Koricancha y el Palacio de Inca Roca, junto a construcciones coloniales de estilo| barroco andino, como la Catedral y la iglesia de la Compañia; además se puede visitar el pintoresco barrio de San Blas, donde se encuentran los talleres de los mejores artesanos del departamento. Esta mágica ciudad cuenta además con una excitante vida nocturna y con cafés, restaurantes y bares para todos los gustos. A diez minutos de la ciudad se levantan las gigantescas murallas de la fortaleza de Sacsayhuamán. Unos kilómetros más lejos, se encuentran los sitios arqueológicos de Qenko, Pukapukara y Tambomachay, construcciones incas edificadas totalmente en piedra.</p>
                            <strong>Machu Picchu</strong>
                            <p>Machu Picchu que se encuentra a 110 Km. al noroeste de la ciudad del Cusco (4 horas en tren),es una impresionante ciudadela inca enclavada en una montaña pintoresca. Su nombre traducido al español significa "Montaña Vieja". También se le ha llamado "la Ciudad Perdida de los Incas", pues fue abandonado por casi cuatro siglos hasta que fue descubierta para Occidente por Hiram Bingham en 1911. En el año 2008 Machu Picchu fue elegida vía votación mundial por Internet entra las 7 maravillas de mundo.</p>
                        </div>
                    </div>
                    <div class="mdl-card mdl-ofertas">
                        <div class="mdl-card__title p-0">
                            <div class="fondo-oferta oferta4">
                                <button id="button4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openModalOferta(this.id)">Ver m&aacute;s</button>
                            </div>
                            <div class="js-paquete-name">
                                <p>Paracas</p>   
                            </div>
                        </div>
                        <div class="modal-paquete" style="display: none;">
                            <strong>Cusco:</strong>
                            <p>Antigua capital del imperio incaico, fue declarada Patrimonio Cultural de la Humanidad por la UNESCO en 1983 y es sin duda uno de los destinos más importantes del Perú.  Entre sus calles empedradas se descubren edificios de construcción inca, como el Koricancha y el Palacio de Inca Roca, junto a construcciones coloniales de estilo| barroco andino, como la Catedral y la iglesia de la Compañia; además se puede visitar el pintoresco barrio de San Blas, donde se encuentran los talleres de los mejores artesanos del departamento. Esta mágica ciudad cuenta además con una excitante vida nocturna y con cafés, restaurantes y bares para todos los gustos. A diez minutos de la ciudad se levantan las gigantescas murallas de la fortaleza de Sacsayhuamán. Unos kilómetros más lejos, se encuentran los sitios arqueológicos de Qenko, Pukapukara y Tambomachay, construcciones incas edificadas totalmente en piedra.</p>
                            <strong>Machu Picchu</strong>
                            <p>Machu Picchu que se encuentra a 110 Km. al noroeste de la ciudad del Cusco (4 horas en tren),es una impresionante ciudadela inca enclavada en una montaña pintoresca. Su nombre traducido al español significa "Montaña Vieja". También se le ha llamado "la Ciudad Perdida de los Incas", pues fue abandonado por casi cuatro siglos hasta que fue descubierta para Occidente por Hiram Bingham en 1911. En el año 2008 Machu Picchu fue elegida vía votación mundial por Internet entra las 7 maravillas de mundo.</p>
                        </div>
                    </div>
                    <div class="mdl-card mdl-ofertas">
                        <div class="mdl-card__title p-0">
                            <div class="fondo-oferta oferta5">
                                <button id="button5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openModalOferta(this.id)">Ver m&aacute;s</button>
                            </div>
                            <div class="js-paquete-name">
                                <p>Puno</p>   
                            </div>
                        </div>
                        <div class="modal-paquete" style="display: none;">
                            <strong>Cusco:</strong>
                            <p>Antigua capital del imperio incaico, fue declarada Patrimonio Cultural de la Humanidad por la UNESCO en 1983 y es sin duda uno de los destinos más importantes del Perú.  Entre sus calles empedradas se descubren edificios de construcción inca, como el Koricancha y el Palacio de Inca Roca, junto a construcciones coloniales de estilo| barroco andino, como la Catedral y la iglesia de la Compañia; además se puede visitar el pintoresco barrio de San Blas, donde se encuentran los talleres de los mejores artesanos del departamento. Esta mágica ciudad cuenta además con una excitante vida nocturna y con cafés, restaurantes y bares para todos los gustos. A diez minutos de la ciudad se levantan las gigantescas murallas de la fortaleza de Sacsayhuamán. Unos kilómetros más lejos, se encuentran los sitios arqueológicos de Qenko, Pukapukara y Tambomachay, construcciones incas edificadas totalmente en piedra.</p>
                            <strong>Machu Picchu</strong>
                            <p>Machu Picchu que se encuentra a 110 Km. al noroeste de la ciudad del Cusco (4 horas en tren),es una impresionante ciudadela inca enclavada en una montaña pintoresca. Su nombre traducido al español significa "Montaña Vieja". También se le ha llamado "la Ciudad Perdida de los Incas", pues fue abandonado por casi cuatro siglos hasta que fue descubierta para Occidente por Hiram Bingham en 1911. En el año 2008 Machu Picchu fue elegida vía votación mundial por Internet entra las 7 maravillas de mundo.</p>
                        </div>
                    </div>
                    <div class="mdl-card mdl-ofertas">
                        <div class="mdl-card__title p-0">
                            <div class="fondo-oferta oferta6">
                                <button id="button6" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openModalOferta(this.id)">Ver m&aacute;s</button>
                            </div>
                            <div class="js-paquete-name">
                                <p>Chiclayo</p>   
                            </div>
                        </div>
                        <div class="modal-paquete" style="display: none;">
                            <strong>Cusco:</strong>
                            <p>Antigua capital del imperio incaico, fue declarada Patrimonio Cultural de la Humanidad por la UNESCO en 1983 y es sin duda uno de los destinos más importantes del Perú.  Entre sus calles empedradas se descubren edificios de construcción inca, como el Koricancha y el Palacio de Inca Roca, junto a construcciones coloniales de estilo| barroco andino, como la Catedral y la iglesia de la Compañia; además se puede visitar el pintoresco barrio de San Blas, donde se encuentran los talleres de los mejores artesanos del departamento. Esta mágica ciudad cuenta además con una excitante vida nocturna y con cafés, restaurantes y bares para todos los gustos. A diez minutos de la ciudad se levantan las gigantescas murallas de la fortaleza de Sacsayhuamán. Unos kilómetros más lejos, se encuentran los sitios arqueológicos de Qenko, Pukapukara y Tambomachay, construcciones incas edificadas totalmente en piedra.</p>
                            <strong>Machu Picchu</strong>
                            <p>Machu Picchu que se encuentra a 110 Km. al noroeste de la ciudad del Cusco (4 horas en tren),es una impresionante ciudadela inca enclavada en una montaña pintoresca. Su nombre traducido al español significa "Montaña Vieja". También se le ha llamado "la Ciudad Perdida de los Incas", pues fue abandonado por casi cuatro siglos hasta que fue descubierta para Occidente por Hiram Bingham en 1911. En el año 2008 Machu Picchu fue elegida vía votación mundial por Internet entra las 7 maravillas de mundo.</p>
                        </div>
                    </div>
                    <div class="mdl-card mdl-ofertas">
                        <div class="mdl-card__title p-0">
                            <div class="fondo-oferta oferta7">
                                <button id="button7" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openModalOferta(this.id)">Ver m&aacute;s</button>
                            </div>
                            <div class="js-paquete-name">
                                <p>Lima</p>   
                            </div>
                        </div>
                        <div class="modal-paquete" style="display: none;">
                            <strong>Cusco:</strong>
                            <p>Antigua capital del imperio incaico, fue declarada Patrimonio Cultural de la Humanidad por la UNESCO en 1983 y es sin duda uno de los destinos más importantes del Perú.  Entre sus calles empedradas se descubren edificios de construcción inca, como el Koricancha y el Palacio de Inca Roca, junto a construcciones coloniales de estilo| barroco andino, como la Catedral y la iglesia de la Compañia; además se puede visitar el pintoresco barrio de San Blas, donde se encuentran los talleres de los mejores artesanos del departamento. Esta mágica ciudad cuenta además con una excitante vida nocturna y con cafés, restaurantes y bares para todos los gustos. A diez minutos de la ciudad se levantan las gigantescas murallas de la fortaleza de Sacsayhuamán. Unos kilómetros más lejos, se encuentran los sitios arqueológicos de Qenko, Pukapukara y Tambomachay, construcciones incas edificadas totalmente en piedra.</p>
                            <strong>Machu Picchu</strong>
                            <p>Machu Picchu que se encuentra a 110 Km. al noroeste de la ciudad del Cusco (4 horas en tren),es una impresionante ciudadela inca enclavada en una montaña pintoresca. Su nombre traducido al español significa "Montaña Vieja". También se le ha llamado "la Ciudad Perdida de los Incas", pues fue abandonado por casi cuatro siglos hasta que fue descubierta para Occidente por Hiram Bingham en 1911. En el año 2008 Machu Picchu fue elegida vía votación mundial por Internet entra las 7 maravillas de mundo.</p>
                        </div>
                    </div>
                    <div class="mdl-card mdl-ofertas">
                        <div class="mdl-card__title p-0">
                            <div class="fondo-oferta oferta8">
                                <button id="button8" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openModalOferta(this.id)">Ver m&aacute;s</button>
                            </div>
                            <div class="js-paquete-name">
                                <p>Huaraz</p>   
                            </div>
                        </div>
                        <div class="modal-paquete" style="display: none;">
                            <strong>Cusco:</strong>
                            <p>Antigua capital del imperio incaico, fue declarada Patrimonio Cultural de la Humanidad por la UNESCO en 1983 y es sin duda uno de los destinos más importantes del Perú.  Entre sus calles empedradas se descubren edificios de construcción inca, como el Koricancha y el Palacio de Inca Roca, junto a construcciones coloniales de estilo| barroco andino, como la Catedral y la iglesia de la Compañia; además se puede visitar el pintoresco barrio de San Blas, donde se encuentran los talleres de los mejores artesanos del departamento. Esta mágica ciudad cuenta además con una excitante vida nocturna y con cafés, restaurantes y bares para todos los gustos. A diez minutos de la ciudad se levantan las gigantescas murallas de la fortaleza de Sacsayhuamán. Unos kilómetros más lejos, se encuentran los sitios arqueológicos de Qenko, Pukapukara y Tambomachay, construcciones incas edificadas totalmente en piedra.</p>
                            <strong>Machu Picchu</strong>
                            <p>Machu Picchu que se encuentra a 110 Km. al noroeste de la ciudad del Cusco (4 horas en tren),es una impresionante ciudadela inca enclavada en una montaña pintoresca. Su nombre traducido al español significa "Montaña Vieja". También se le ha llamado "la Ciudad Perdida de los Incas", pues fue abandonado por casi cuatro siglos hasta que fue descubierta para Occidente por Hiram Bingham en 1911. En el año 2008 Machu Picchu fue elegida vía votación mundial por Internet entra las 7 maravillas de mundo.</p>
                        </div>
                    </div>
                    <div class="mdl-card mdl-ofertas">
                        <div class="mdl-card__title p-0">
                            <div class="fondo-oferta oferta9">
                                <button id="button9" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="openModalOferta(this.id)">Ver m&aacute;s</button>
                            </div>
                            <div class="js-paquete-name">
                                <p>Trujillo</p>   
                            </div>
                        </div>
                        <div class="modal-paquete" style="display: none;">
                            <strong>Cusco:</strong>
                            <p>Antigua capital del imperio incaico, fue declarada Patrimonio Cultural de la Humanidad por la UNESCO en 1983 y es sin duda uno de los destinos más importantes del Perú.  Entre sus calles empedradas se descubren edificios de construcción inca, como el Koricancha y el Palacio de Inca Roca, junto a construcciones coloniales de estilo| barroco andino, como la Catedral y la iglesia de la Compañia; además se puede visitar el pintoresco barrio de San Blas, donde se encuentran los talleres de los mejores artesanos del departamento. Esta mágica ciudad cuenta además con una excitante vida nocturna y con cafés, restaurantes y bares para todos los gustos. A diez minutos de la ciudad se levantan las gigantescas murallas de la fortaleza de Sacsayhuamán. Unos kilómetros más lejos, se encuentran los sitios arqueológicos de Qenko, Pukapukara y Tambomachay, construcciones incas edificadas totalmente en piedra.</p>
                            <strong>Machu Picchu</strong>
                            <p>Machu Picchu que se encuentra a 110 Km. al noroeste de la ciudad del Cusco (4 horas en tren),es una impresionante ciudadela inca enclavada en una montaña pintoresca. Su nombre traducido al español significa "Montaña Vieja". También se le ha llamado "la Ciudad Perdida de los Incas", pues fue abandonado por casi cuatro siglos hasta que fue descubierta para Occidente por Hiram Bingham en 1911. En el año 2008 Machu Picchu fue elegida vía votación mundial por Internet entra las 7 maravillas de mundo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="nosotros">
            <div class="js-container">
                <h2 class="js-title">Nosotros</h2>
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
        <div class="modal fade" id="ModalOferta" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-large" role="document">
                <div class="modal-content">
                    <div class="mdl-card">
                        <div class="mdl-card__title">
                            <h2></h2>
                        </div>
                        <div class="mdl-card__supporting-text"></div>
                    </div>
                    <div class="mdl-card__actions text-right">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button">M&aacute;s Detalle</button>
                    </div>
                    <div class="mdl-card__menu">
                        <button class="mdl-button mdl-js-button mdl-button--icon" data-dismiss="modal"><i class="mdi mdi-close"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="ModalPaquete" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-large" role="document">
                <div class="modal-content">
                    <div class="mdl-card">
                        <div class="mdl-card__title">
                            <h2></h2>
                        </div>
                        <div class="mdl-card__supporting-text"></div>
                    </div>
                    <div class="mdl-card__actions text-right">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button">M&aacute;s Detalle</button>
                    </div>
                    <div class="mdl-card__menu">
                        <button class="mdl-button mdl-js-button mdl-button--icon" data-dismiss="modal"><i class="mdi mdi-close"></i></button>
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