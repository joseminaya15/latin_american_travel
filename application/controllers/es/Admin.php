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
        $usuario = $this->session->userdata('usuario');
        if ($usuario != null) {
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
            $datos = $this->M_datos->deleteDias($idOferta,1);
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
            $datos = $this->M_datos->deleteDias($idPaquete,2);
            $elim  = $this->M_datos->deleteAtractivos($idPaquete,'atractivos','id_paquetes', 2);
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

    function registrarPaquete(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $titulo     = $this->input->post('titulo');
            $dias       = $this->input->post('dias');
            $atractivos = $this->input->post('atractivos');
            $img        = $this->input->post('img');
            // log_message('error', print_r($titulo, true));
            $insert = $this->M_datos->insertarDatos(array('lugar'  => $titulo,
                                                          'dias'   => $dias,
                                                          'imagen' => $img),
                                                    'paquetes');
            foreach($atractivos as $key){
                $this->M_datos->insertarDatos(array('lugar'            => $key['lugar'],
                                                    'descripcion'      => $key['desc'],
                                                    'flg_paquet_ofert' => 2,
                                                    'id_paquetes'      => $insert['Id']),
                                              'atractivos');
            }

            $data['htmlPaq'] = __buildCardsPaquetes(1);
            $data['error'] = EXIT_SUCCESS;
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }

    function registrarOferta(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $titulo     = $this->input->post('titulo');
            $dias       = $this->input->post('dias');
            $desc       = $this->input->post('desc');
            $atractivos = $this->input->post('atractivos');
            $img        = $this->input->post('img');
            
            $insert = $this->M_datos->insertarDatos(array('nombre'       => $titulo,
                                                          'dias'         => $dias,
                                                          'desc_general' => $desc,
                                                          'img'          => $img),
                                                    'ofertas');
            foreach($atractivos as $key){
                $this->M_datos->insertarDatos(array('lugar'            => $key['lugar'],
                                                    'descripcion'      => $key['desc'],
                                                    'flg_paquet_ofert' => 1,
                                                    'id_paquetes'      => $insert['Id']),
                                              'atractivos');
            }

            $data['htmlOff'] = __buildCardsOfertas(1);
            $data['error'] = EXIT_SUCCESS;
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }

    function cerrarSesion(){
        $this->session->unset_userdata('usuario');
    }

    function modalEditarPaquete(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            
            $idPaquete = $this->input->post('idPaquete');
            $paquetes = $this->M_datos->getPaquetesByBusqueda(null,$idPaquete)[0];
            
            $array_lugares = explode('|',$paquetes->lugar_detalle);
            $lugares = array();
            foreach($array_lugares as $lug) {
                $array_lug = explode('*', $lug);
                array_push($lugares,array( 'lugar' => $array_lug[0],
                                           'desc'  => $array_lug[1],
                                           'id'    => $array_lug[2] ));
            }
            
            $data['titulo'] = $paquetes->titulo;
            $data['dias']   = $paquetes->dias;
            $data['array_lugares']   = $lugares;
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }

    function modalEditarOferta(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            
            $idOferta = $this->input->post('idOferta');
            $ofertas = $this->M_datos->getOfertasByBusqueda(null,$idOferta)[0];
            
            $array_lugares = explode('|',$ofertas->lugar_detalle);
            $lugares = array();
            foreach($array_lugares as $lug) {
                $array_lug = explode('*', $lug);
                array_push($lugares,array( 'lugar' => $array_lug[0],
                                           'desc'  => $array_lug[1],
                                           'id'    => $array_lug[2] ));
            }
            
            $data['titulo']         = $ofertas->titulo;
            $data['dias']           = $ofertas->dias;
            $data['desc_general']   = $ofertas->desc_general;
            $data['array_lugares']  = $lugares;
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }

    function editarTituloOff(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $titulo = $this->input->post('titulo');
            $id     = $this->input->post('idOferta');
            $this->M_datos->updateDatos(array('nombre'=>$titulo), $id , 'ofertas','id');
            $data['error'] = EXIT_SUCCESS;
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }

    function editarDiasOff(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $dias = $this->input->post('dias');
            $id   = $this->input->post('idOferta');
            $this->M_datos->updateDatos(array('dias'=>$dias), $id , 'ofertas','id');
            $data['error'] = EXIT_SUCCESS;
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }

    function editarDescGeneral(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $desc = $this->input->post('desc');
            $id   = $this->input->post('idOferta');
            $this->M_datos->updateDatos(array('desc_general'=>$desc), $id , 'ofertas','id');
            $data['error'] = EXIT_SUCCESS;
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }

    function editarTitulo(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $titulo = $this->input->post('titulo');
            $id     = $this->input->post('idPaquete');
            $this->M_datos->updateDatos(array('lugar'=>$titulo), $id , 'paquetes');
            $data['error'] = EXIT_SUCCESS;
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }

    function editarDias(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $dias = $this->input->post('dias');
            $id   = $this->input->post('idPaquete');
            $this->M_datos->updateDatos(array('dias'=>$dias), $id , 'paquetes');
            $data['error'] = EXIT_SUCCESS;
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }

    function registrarAtractivo(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $lugar = $this->input->post('lugar');
            $desc  = $this->input->post('desc');
            $id    = $this->input->post('id');
            $flg    = $this->input->post('flg');
            $insert = $this->M_datos->insertarDatos(
                                           array('lugar'            => $lugar,
                                                 'descripcion'      => $desc,
                                                 'flg_paquet_ofert' => $flg,
                                                 'id_paquetes'      => $id),
                                           'atractivos' );
            $data['id'] = $insert['Id'];
            $data['error'] = EXIT_SUCCESS;
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }

    function eliminarAtractivo(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;  
        try {
            $idAtractivo  = $this->input->post('idAtractivo');
            $idEliminar   = $this->input->post('idEliminar');
            $flg          = $this->input->post('flg');

            $cant = $this->M_datos->countById($idEliminar, 'atractivos', 'id_paquetes',$flg);
            if($cant > 1){
                $datos = $this->M_datos->deleteDatos($idAtractivo,'atractivos','Id');
                $data['error'] = EXIT_SUCCESS;
            }
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }

    function cargarImagen(){
        $respuesta = new stdClass();
        $respuesta->mensaje = $this->validarImagen($_FILES);
        if(count($_FILES) != 0 && $respuesta->mensaje == null){
            $tipo = $_FILES['archivo']['type']; 
            $tamanio = $_FILES['archivo']['size']; 
            $archivotmp = $_FILES['archivo']['tmp_name'];
            $namearch = $_FILES['archivo']['name'];
            $nuevo = explode(".",$namearch);
            $target = getcwd().DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.'paquetes'.DIRECTORY_SEPARATOR.basename($_FILES['archivo']['name']);
            if(move_uploaded_file($archivotmp, $target) ){
                $respuesta->mensaje = 'Su imagen se subió correctamente.';
                $respuesta->name    = $namearch;
                $respuesta->ruta    = RUTA_IMG.'paquetes/'.$namearch;
            } else {
                $respuesta->mensaje = 'Hubo un problema en la subida de su imagen.';
            }
        }
        echo json_encode($respuesta);
    }

    function cargarImagenOff(){
        $respuesta = new stdClass();
        $respuesta->mensaje = $this->validarImagen($_FILES);
        if(count($_FILES) != 0 && $respuesta->mensaje == null){
            $tipo = $_FILES['archivo']['type']; 
            $tamanio = $_FILES['archivo']['size']; 
            $archivotmp = $_FILES['archivo']['tmp_name'];
            $namearch = $_FILES['archivo']['name'];
            $nuevo = explode(".",$namearch);
            $target = getcwd().DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.'ofertas'.DIRECTORY_SEPARATOR.basename($_FILES['archivo']['name']);
            if(move_uploaded_file($archivotmp, $target) ){
                $respuesta->mensaje = 'Su imagen se subió correctamente.';
                $respuesta->name    = $namearch;
                $respuesta->ruta    = RUTA_IMG.'ofertas/'.$namearch;
            } else {
                $respuesta->mensaje = 'Hubo un problema en la subida de su imagen.';
            }
        }
        echo json_encode($respuesta);
    }

    function validarImagen($archivo){
        $msj = null;
        if(count($archivo) == 0){
            $msj = 'Seleccione su imagen.';
        } else {
            $tipo = $archivo['archivo']['type']; 
            $tamanio = $archivo['archivo']['size']; 
            $archivotmp = $archivo['archivo']['tmp_name'];
            $namearch = $archivo['archivo']['name'];
            $nuevo = explode(".",$namearch);
            if($tamanio > '2000000'){
                $msj = 'El tamaño de su imagen debe ser menor';
            }else {
                if($nuevo[1] != 'pdf' && $nuevo[1] != 'jpeg' && $nuevo[1] != 'jpg' && $nuevo[1] != 'png'){
                    $msj = 'El formato de la imagen es incorrecto.';
                }
            }
        }
        return $msj;
    }

    function verificarImg(){
        $respuesta = new stdClass();
        $respuesta->mensaje = $this->validarImagen($_FILES);
        echo json_encode($respuesta);
    }

    function editImg(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;  
        try {
            $name       = $this->input->post('name');
            $idPaquete  = $this->input->post('idPaquete');
            $flg        = $this->input->post('flg');
            if($name == null){
                return;
            }
            $table  = ($flg == 1) ? 'ofertas' : 'paquetes';
            $img    = ($flg == 1) ? 'img' : 'imagen';
            $col_id = ($flg == 1) ? 'id' : 'Id';
            $this->M_datos->updateDatos(array($img=>$name), $idPaquete , $table,$col_id);
            $data['error'] = EXIT_SUCCESS;
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }

    function getDiasByGrupo(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;  
        try {
            $id    = $this->input->post('idGrupo');
            $flg   = $this->input->post('flg');
            $arrayDias = $this->M_datos->getDiasById($id, $flg);
            $data['dias'] = $arrayDias;
            $data['error'] = EXIT_SUCCESS;
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }

    function agregarDia(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;  
        try {
            $idGrupo    = $this->input->post('idGrupo');
            $varTitulo  = $this->input->post('varTitulo');
            $varDesc    = $this->input->post('varDesc');
            $flg        = $this->input->post('flg');

            $nextDia  = $this->M_datos->getNextDia($idGrupo,$flg);
            $insert   = $this->M_datos->insertarDatos(array('desc_lugar'       => $varTitulo,
                                                            'desc_viaje'       => $varDesc,
                                                            'id_dia'           => $nextDia,
                                                            'id_paquete'       => $idGrupo,
                                                            'flg_paquet_ofert' => $flg),
                                                        'dias_x_atractivos');
            // log_message('error', print_r($insert, true));
            $data['id'] = $insert['Id'];
            $data['error'] = EXIT_SUCCESS;
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }

    function quitarDia(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;  
        try {
            $idGrupo    = $this->input->post('idGrupo');
            $id           = $this->input->post('id');

            $datos = $this->M_datos->deleteDatos($id,'dias_x_atractivos','Id');

            $data['error'] = EXIT_SUCCESS;
        }catch(Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }
}
