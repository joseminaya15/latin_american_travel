<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Experience extends CI_Controller {

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
        $htmlPaq = __buildCardsPaquetes(null, 1);
        $htmlOfer  = __buildCardsOfertas(null, 1);
        $data['comentarios'] = $html;
		$this->load->view('es/v_experiencias', $data);
	}
}