<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('__buildCardsPaquetes')) {
    function __buildCardsPaquetes($menu = null,$verMas = null, $text = null) {
        $CI =& get_instance();
        $CI->load->model('M_datos');
        $htmlPaq = null;
        $cont = 1;
        $paquetes = $CI->M_datos->getOfertas($text);
        foreach ($paquetes as $key) {
            if ($key->lugar == 'Puno' || $key->lugar == 'Paracas') {
                $img = '.jpeg';
            } else {
                $img = '.jpg';
            }
            $htmlPaq.= '
                <div class="mdl-card mdl-paquetes">
                    <div class="mdl-card__title p-0">
                        <div class="fondo-oferta oferta'.$cont.'">
                            '.($verMas == null ? ''
                                               : '<button id="button'.$cont.'" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" 
                                                     onclick="goToPaquete(this.id)">Ver m&aacute;s</button>
                                                  ').'    
                        </div>
                        <div class="js-paquete-name">
                            <p>'.$key->lugar.'</p>
                        </div>
                    </div>
                    '.($menu == null ? ''
                                     : '<div class="mdl-card__menu">
                                            <button id="demo-menu-lower-right'.$cont.'" class="mdl-button mdl-js-button mdl-button--icon">
                                                <i class="mdi mdi-more_vert"></i>
                                            </button>
                                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right'.$cont.'">
                                                <li class="mdl-menu__item"><i class="mdi mdi-edit"></i>Editar</li>
                                                <li class="mdl-menu__item"><i class="mdi mdi-delete"></i>Eliminar</li>
                                            </ul>
                                        </div>').'
                </div>';
            $cont++;
        }
        return $htmlPaq;
    }
}


if(!function_exists('__buildCardsOfertas')) {

}