<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
    $html  = '';
    $cont  = 1;
    $activ = '';
    $datos = $this->M_datos->getComentarios();
    if(count($datos) == 0){
      return;
    }else {
      foreach ($datos as $key) {
        if($cont <= 2){
          $activ = 'active';
        }else if($cont > 2){
          $activ = '';
        }
        $foto = ($key->Foto == 'nouser') ? RUTA_IMG.'logo/nouser.jpg' : $key->Foto;
        $html .= '<div class="owl-item '.$activ.'" style="width: 563px;">
                    <div class="item">
                        <div class="mdl-experiencia">
                            <div class="js-experiencia--perfil">
                                <img src="'.$foto.'" alt="">
                            </div>
                            <div class="js-experiencia--contenido">
                                <h2>'.$key->Nombre.' '.$key->Apellido.'</h2>
                                <p>'.$key->comentario.'</p>
                                <small>'.$key->fecha_coment.'</small>
                            </div>
                        </div>
                    </div>
                  </div>';
        $cont++;
      }
    }
    $htmlPaq = __buildCardsPaquetes(null, 1,null,6);
    // $htmlOfer  = __buildCardsOfertas(null, 1);
    $data['comentarios'] = $html;
    $data['paquetes'] = $htmlPaq;
    // $data['ofertas'] = $htmlOfer;
		$this->load->view('es/v_home', $data);
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
  function buscarOferta(){
    $data['error'] = EXIT_ERROR;
    $data['msj']   = null;
    try {
      $html  = '';$htmlPaq = '';
      $cont  = 1;
      $img   = '';
      $texto = $this->input->post('texto');
      $htmlPaq  = __buildCardsPaquetes(null, 1, $texto,6);
      $data['paquetes']  = $htmlPaq;
      $data['error'] = EXIT_SUCCESS;
    }catch(Exception $e){
      $data['msj'] = $e->getMessage();
    }
    echo json_encode($data);
  }
  function comentar(){
    $data['error'] = EXIT_ERROR;
    $data['msj']   = null;
    try {
      $html  = '';
      $cont  = 1;
      $activ = '';
      $texto    = $this->input->post('comentario');
      $name     = $this->input->post('name');
      $lastname = $this->input->post('lastname');
      $imageUrl = $this->input->post('imageUrl');
      $email    = $this->input->post('email');
      $arrayInsert = array('comentario' => $texto,
                           'Nombre'   => $name,
                           'Apellido' => $lastname,
                           'Email'    => $email,
                           'pass'     => '',
                           'Foto'     => $imageUrl,
                           'fecha'    => date("Y-m-d"));
      $datoInsert  = $this->M_datos->insertarDatos($arrayInsert, 'opiniones');
      $datos = $this->M_datos->getComentarios();
      if(count($datos) == 0){
        return;
      }else {
        foreach ($datos as $key) {
          if($cont <= 2){
            $activ = 'active';
          }else if($cont > 2){
            $activ = '';
          }
          $foto = ($key->Foto == 'nouser') ? RUTA_IMG.'logo/nouser.jpg' : $key->Foto;
          $html .= '<div class="owl-item '.$activ.'" style="width: 563px;">
                      <div class="item">
                          <div class="mdl-experiencia">
                              <div class="js-experiencia--perfil">
                                  <img src="'.$foto.'" alt="">
                              </div>
                              <div class="js-experiencia--contenido">
                                  <h2>'.$key->Nombre.' '.$key->Apellido.'</h2>
                                  <p>'.$key->comentario.'</p>
                                  <small>'.$key->fecha_coment.'</small>
                              </div>
                          </div>
                      </div>
                    </div>';
          $cont++;
        }
      }
      $data['comentarios'] = $html;
      $data['error'] = EXIT_SUCCESS;
    }catch(Exception $e){
      $data['msj'] = $e->getMessage();
    }
    echo json_encode($data);
  }
}