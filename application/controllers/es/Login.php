<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
        $usuario = $this->session->userdata('usuario');
        if($usuario != null){
            redirect('Admin','refresh');
        } else {
            $this->load->view('es/v_login');
        }
    }
    
    function ingresar(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $user     = $this->input->post('user');
            $password = $this->input->post('pass');
            $datos = $this->M_datos->getUsuario($user,$password);
            if($datos != null){
                $this->session->set_userdata(array('usuario' => $user));
                $data['error'] = EXIT_SUCCESS;
            }
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }

}