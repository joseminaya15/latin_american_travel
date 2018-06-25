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
        $destinos = $this->M_datos->getDestinosByFlg(1);
        $nav = '';
        if(count($destinos) != 0){
            $count = 0;
            foreach ($destinos as $key) {
                $count++;
                $nav.= '<a id="menu-paquete'.$count.'" class="mdl-navigation__link" onclick="getOfertasByDestino(this)">'.$key->lugar.'</a>';
            }
        }
        $htmlOfer  = __buildCardsOfertas(null, 1);
        $data['nav'] = $nav;
        $data['ofertas'] = $htmlOfer;
		$this->load->view('es/v_offer',$data);
	}

    function getOfertasByDestino(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $txt = $this->input->post('txt');
            
            $htmlOfer  = __buildCardsOfertas(null, 1, $txt);
            $data['ofertas']  = $htmlOfer;
            $data['error'] = EXIT_SUCCESS;
        }catch(Exception $e){
          $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }
}