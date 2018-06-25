<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Controller {

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
        $destinos = $this->M_datos->getDestinosByFlg(2);
        // log_message('error',print_r($destinos,true));
        $nav = '';
        if(count($destinos) != 0){
            $count = 0;
            foreach ($destinos as $key) {
                $count++;
                $nav.= '<a id="menu-paquete'.$count.'" class="mdl-navigation__link" onclick="getPaquetesByDestino(this)">'.$key->lugar.'</a>';
            }
        }
        // 
        $htmlPaq = __buildCardsPaquetes(null, 1);
        $data['nav'] = $nav;
        $data['paquetes'] = $htmlPaq;
		$this->load->view('es/v_package', $data);
    }

    function getPaquetesByDestino(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $txt = $this->input->post('txt');
            
            $htmlPaq = __buildCardsPaquetes(null, 1, $txt);
            $data['paquetes']  = $htmlPaq;
            $data['error'] = EXIT_SUCCESS;
        }catch(Exception $e){
          $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }
}