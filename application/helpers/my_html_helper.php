<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('__buildCardsPaquetes')) {
    function __buildCardsPaquetes($menu = null,$verMas = null, $text = null) {
        $CI =& get_instance();
        $CI->load->model('M_datos');
        $htmlPaq = null;
        $cont = 1;
        $paquetes = $CI->M_datos->getPaquetesByBusqueda($text);
        foreach ($paquetes as $key) {
            $htmlPaq.= '
                <div class="mdl-card mdl-paquetes">
                    <div class="mdl-card__title p-0">
                        <div class="fondo-paquete" style="background-image: url('.RUTA_IMG.'paquetes/'.$key->imagen.')">
                            '.($verMas == null ? ''
                                               : '<button id="paquete'.$key->Id.'" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" 
                                                     onclick="goToPaquete(this.id)">Ver m&aacute;s</button>
                                                  ').'    
                        </div>
                        <div class="js-paquete-name">
                            <p>'.$key->titulo.'</p>
                        </div>
                    </div>
                    '.($menu == null ? ''
                                     : '<div class="mdl-card__menu">
                                            <button id="demo-menu-lower-right-paq'.$key->Id.'" class="mdl-button mdl-js-button mdl-button--icon">
                                                <i class="mdi mdi-more_vert"></i>
                                            </button>
                                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" 
                                            for="demo-menu-lower-right-paq'.$key->Id.'" data-paquete="'.$key->Id.'">
                                                <li class="mdl-menu__item" onclick="modalEditarPaquete(this)"><i class="mdi mdi-edit"></i>Editar</li>
                                                <li class="mdl-menu__item" onclick="modalEliminarPaquete(this)"><i class="mdi mdi-delete"></i>Eliminar</li>
                                                <li class="mdl-menu__item" onclick="modalConfigurarDiasPaq(this)"><i class="mdi mdi-edit"></i>Días</li>
                                            </ul>
                                        </div>').'
                </div>';
            $cont++;
        }
        return $htmlPaq;
    }
}


if(!function_exists('__buildCardsOfertas')) {
    function __buildCardsOfertas($menu = null,$verMas = null, $text = null){
        $CI =& get_instance();
        $CI->load->model('M_datos');
        $htmlOfer = null;
        $cont = 1;
        $ofertas = $CI->M_datos->getOfertasByBusqueda($text);
        
        foreach($ofertas as $key){
            $lugares = str_replace(","," - ",$key->atractivos);
            $htmlOfer.= '<div class="mdl-card mdl-ofertas">
                            <div class="mdl-card__title p-0">
                                '.($verMas == null ? ''
                                                   : '<button id="oferta'.$key->id.'" class="mdl-button mdl-js-button mdl-button--raised
                                                        mdl-js-ripple-effect" onclick="goToOferta(this.id)">Ver m&aacute;s</button>').'
                                <div class="fondo-oferta" style="background-image: url('.RUTA_IMG.'ofertas/'.$key->img.')"></div>
                                <div class="js-paquete-name">
                                    <p>'.$key->titulo.'</p>
                                </div>
                            </div>
                            <div class="mdl-card__supporting-text">
                                <div class="js-paquetes location">
                                    <i class="mdi mdi-location_on"></i>
                                    <span class="cont_lugares">'.$lugares.'</span>
                                </div>
                                <div class="js-paquetes">
                                    <i class="mdi mdi-date_range"></i>
                                    <span class="cont_dias">'.$key->dias.'</span>
                                </div>
                                <div class="js-contenido">
                                    <p>'.$key->desc_general.'</p>
                                </div>
                            </div>
                            '.($menu == null ? ''
                                             : '<div class="mdl-card__menu">
                                                    <button id="demo-menu-lower-right-ofe'.$key->id.'" class="mdl-button mdl-js-button mdl-button--icon">
                                                        <i class="mdi mdi-more_vert"></i>
                                                    </button>
                                                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" 
                                                        for="demo-menu-lower-right-ofe'.$key->id.'" data-oferta="'.$key->id.'">
                                                        <li class="mdl-menu__item" onclick="modalEditarOferta(this)"><i class="mdi mdi-edit"></i>Editar</li>
                                                        <li class="mdl-menu__item" onclick="modalEliminarOferta(this)"><i class="mdi mdi-delete"></i>Eliminar</li>
                                                        <li class="mdl-menu__item" onclick="modalConfigurarDiasOff(this)"><i class="mdi mdi-edit"></i>Días</li>
                                                    </ul>
                                                </div>').'
                        </div>';
            $cont++;
        }
        return $htmlOfer;
    }
}