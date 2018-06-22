<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailOffer extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper("url");//BORRAR CACHÉ DE LA PÁGINA
        $this->load->model('M_datos');
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
    }

	public function index(){

        $ofertas = $this->M_datos->getOfertasByBusqueda();
        
        $nav = "";
        $section = "";
        $opacity = "";
        $navActive = "active";
        foreach ($ofertas as $key) {
            $nav.= '<a id="menu-oferta'.$key->id.'" class="mdl-navigation__link '.$navActive.'" onclick="goToMenu(this.id)">
                        '.$key->titulo.'
                    </a>';
            $navActive = "";
            $lugares = str_replace(",","-",$key->atractivos);
            $array_lugares = explode('|',$key->lugar_detalle);
            $htmlLugares = "";
            // log_message('error',print_r($array_lugares,true));
            foreach($array_lugares as $lug) {
                $array_lug = explode('*', $lug);
                $htmlLugares.= "<h2>".$array_lug[0]."</h2><p>".$array_lug[1]."</p>";
            }
            $section.= '<section id="section-menu-oferta'.$key->id.'" class="section js-paquete js-section--menu '.$opacity.'">
                            <div class="js-container">
                                <h2 class="js-title">'.$key->titulo.'</h2>
                                <p>'.$lugares.'</p>
                                <p>'.$key->dias.'</p>
                                <div class="js-paquete--contenido">
                                    '.$htmlLugares.'
                                </div>
                            </div>
                        </section>';
            $opacity = "js-opacity-done";
        }
        $data['nav'] = $nav;
        $data['section'] = $section;
        // 

        
		$this->load->view('es/v_detailoffer',$data);
	}
}