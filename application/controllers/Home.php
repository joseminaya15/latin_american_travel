<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper("url");//BORRAR CACHÉ DE LA PÁGINA
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
    }

	public function index(){
		$this->load->view('v_home');
	}
	function enviarDatos(){
	  $data['error'] = EXIT_ERROR;
      $data['msj']   = null;
      try {
       $nombre = $this->input->post('nombre');
       $dni    = $this->input->post('dni');
       $correo = $this->input->post('correo');
       $celular = $this->input->post('celular');
       $mensaje = $this->input->post('mensaje');
       $this->load->library("email");
       $configGmail = array('protocol'  => 'smtp',
                            'smtp_host' => 'smtpout.secureserver.net',
                            'smtp_port' => 3535,
                            'smtp_user' => 'info@marketinghpe.com',
                            'smtp_pass' => 'hpeinfo18',
                            'mailtype'  => 'html',
                            'charset'   => 'utf-8',
                            'newline'   => "\r\n");
       $this->email->initialize($configGmail);
       $this->email->from('jhonatanibericom@gmail.com');
       $this->email->to($correo);
       $this->email->subject('Gracias por contactarte con Américan Látin Trável');
       $texto = '<!DOCTYPE html>
					<html>
					<head>
						<title>Latin travel</title>
					</head>
					<body>
						<h1>Gracias por contactarte con Américan Látin Trável</h1>
						<h3>Alguien está interesado en ser contactado y estos son sus datos:</h3>
						<p><strong>Nombre:</strong> '.$nombre.'</p>
						<p><strong>DNI:</strong> '.$dni.'</p>
						<p><strong>CORREO:</strong> '.$correo.'</p>
						<p><strong>CELULAR:</strong> '.$celular.'</p>
						<p><strong>MENSAJE:</strong> '.$mensaje.'</p>
					</body>
				</html>';
       $this->email->message($texto);
       $this->email->send();
       $data['error'] = EXIT_SUCCESS;
      }catch (Exception $e){
        $data['msj'] = $e->getMessage();
      }
      return json_encode(array_map('utf8_encode', $data));
	}
}