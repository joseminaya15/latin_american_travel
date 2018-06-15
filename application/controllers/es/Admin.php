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
        $html  = '';
        $cont  = 1;
        $activ = '';
        $datos = $this->M_datos->getComentarios2();
        if(count($datos) == 0){
          $html = '<tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>';
        }else {
          foreach ($datos as $key) {
            /*$img     = '';
            if($key->imagen == null || $key->imagen == ''){
                $img = 'nouser.png';
            }else {
                $img = $key->imagen;
            }*/
            $foto = ($key->Foto == 'nouser') ? RUTA_IMG.'logo/nouser.jpg' : $key->Foto;
            $html .= '<tr>
                        <td><img src="'.$foto.'" style="width:  100%;max-width: 80px;"></td>
                        <td style="color: black !important;">'.$key->Nombre.' '.$key->Apellido.'</td>
                        <td style="color: black !important;">'.$key->comentario.'</td>
                        <td style="color: black !important;">'.$key->fecha_coment.'</td>
                        <td style="color: black !important;"><button type="button" class="btn btn-info" onclick="eliminarComentarios('.$key->Id.')"><i class="mdi mdi-clear"></i></button></td>
                    </tr>';
          }
        }
        $data['html'] = $html;
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
            $elim  = $this->M_datos->deleteAtractivos($idOferta,'atractivos','id_paquetes', 1);
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
            $elim  = $this->M_datos->deleteAtractivos($idOferta,'atractivos','id_paquetes', 0);
            $data['error'] = EXIT_SUCCESS;
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }

    function eliminarComentarios(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $id_comentario = $this->input->post('id_comentario');
            $datos = $this->M_datos->deleteDatos($id_comentario,'opiniones','Id');
            $html  = '';
            $datos = $this->M_datos->getComentarios2();
            if(count($datos) == 0){
              $html = '<tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>';
            }else {
              foreach ($datos as $key) {
                /*$img     = '';
                if($key->imagen == null || $key->imagen == ''){
                    $img = 'nouser.png';
                }else {
                    $img = $key->imagen;
                }*/
                $foto = ($key->Foto == 'nouser') ? RUTA_IMG.'logo/nouser.jpg' : $key->Foto;
                $html .= '<tr>
                            <td><img src="'.$foto.'" style="width:  100%;max-width: 80px;"></td>
                            <td style="color: black !important;">'.$key->Nombre.' '.$key->Apellido.'</td>
                            <td style="color: black !important;">'.$key->comentario.'</td>
                            <td style="color: black !important;">'.$key->fecha_coment.'</td>
                            <td style="color: black !important;"><button type="button" class="btn btn-info" onclick="eliminarComentarios('.$key->Id.')"><i class="mdi mdi-clear"></i></button></td>
                        </tr>';
              }
            }
            $data['html'] = $html;
            $data['error'] = EXIT_SUCCESS;
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }
}
