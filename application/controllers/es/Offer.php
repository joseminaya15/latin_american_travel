<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offer extends CI_Controller {

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
        
        $cont = 1;
        $nav = "";
        $section = "";
        $opacity = "";
        $navActive = "active";
        foreach ($ofertas as $key) {
            $nav.= '<a id="oferta'.$key->id.'" class="mdl-navigation__link" onclick="goToMenu(this.id)">
                        '.$key->nombre.'
                    </a>';
            $navActive = "";
            $section.= '<section id="section-oferta'.$key->id.'" class="section js-paquete js-section--menu '.$opacity.'">
                            <div class="js-container">
                                <h2 class="js-title">'.$key->nombre.'</h2>
                                <div class="js-paquete--contenido">
                                    <p>'.$key->detalle.'</p>
                                </div>
                            </div>                    
                        </section>';
            $opacity = "js-opacity-done";
        }
        $data['nav'] = $nav;
        $data['section'] = $section;
        // 

        
		$this->load->view('es/v_offer',$data);
	}
}