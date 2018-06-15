<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");//BORRAR CACHÉ DE LA PÁGINA
        $this->load->model('M_datos');
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
        $this->output->set_header('Pragma: no-cache');
    }

    public function index()
    {
        // $this->session->unset_userdata('usuario');
        $usuario = $this->session->userdata('usuario');
        if ($usuario != null) {
            // log_message('error', print_r($paquetes, true));
            $htmlPaq = __buildCardsPaquetes(1);
            $htmlOfer  = __buildCardsOfertas(1);
            $data['paquetes'] = $htmlPaq;
            $data['ofertas'] = $htmlOfer;
            $this->load->view('es/v_admin', $data);
        } else {
            redirect('Login', 'refresh');
        }
    }

    function eliminarCardOferta(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $idOferta = $this->input->post('idOferta');
            $datos = $this->M_datos->deleteDatos($idOferta,'ofertas','id');
            $data['error'] = EXIT_SUCCESS;
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }

    function eliminarCardPaquete(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $idPaquete = $this->input->post('idPaquete');
            $datos = $this->M_datos->deleteDatos($idPaquete,'paquetes','Id');
            $data['error'] = EXIT_SUCCESS;
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }
}
