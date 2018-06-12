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
            $paquetes = $this->M_datos->getOfertas();
            // log_message('error', print_r($paquetes, true));
            $cont = 1;
            $htmlPaq = __buildCardsPaquetes(1);
            $data['paquetes'] = $htmlPaq;
            $this->load->view('v_admin', $data);
        } else {
            redirect('Login', 'refresh');
        }
    }
}
