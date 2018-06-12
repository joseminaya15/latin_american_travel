<?php

class M_datos extends  CI_Model{
    function __construct(){
        parent::__construct();
    }
    function insertarDatos($arrayInsert, $tabla){
      $this->db->insert($tabla, $arrayInsert);
      $sol = $this->db->insert_id();
      if($this->db->affected_rows() != 1){
          throw new Exception('Error al insertar');
          $data['error'] = EXIT_ERROR;
      }
      return array("error" => EXIT_SUCCESS, "msj" => MSJ_INS, "Id" => $sol);
    }
    function updateDatos($arrayData, $id, $tabla){
      $this->db->where('Id'  , $id);
      $this->db->update($tabla, $arrayData);
      if ($this->db->trans_status() == false){
          throw new Exception('No se pudo actualizar los datos');
      }
      return array('error' => EXIT_SUCCESS,'msj' => MSJ_UPT);
    }
    function getOfertas($texto = null){
      $sql = "SELECT b.* FROM buscador b WHERE b.lugar LIKE ?";
      $result = $this->db->query($sql,array('%'.$texto.'%'));
      // log_message('error',$this->db->last_query());
      return $result->result();
    }
    function getComentarios(){
      $sql = "SELECT o.*,
                     DATE_FORMAT(o.fecha, '%M %d, %Y') AS fecha_coment
               FROM opiniones o ORDER BY o.Id DESC LIMIT 5";
      $result = $this->db->query($sql);
      return $result->result();
    }
    function getPaquetesByBusqueda($texto = null){
      $sql = "SELECT p.* 
                FROM paquetes p 
               WHERE p.nombre  LIKE ?
                  OR p.detalle LIKE ?
                  OR p.lugar   LIKE ?";
      $result = $this->db->query($sql,array('%'.$texto.'%','%'.$texto.'%','%'.$texto.'%'));
      return $result->result();
    }

    function getUsuario($user,$pass){
        $sql = "SELECT *
                  FROM usuario
                 WHERE user LIKE ?
                   AND password = BINARY ?";
        $result = $this->db->query($sql,array($user,$pass));
        return $result->result();
    }
}