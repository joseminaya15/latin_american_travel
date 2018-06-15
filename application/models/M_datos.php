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
    function deleteDatos($id_dato, $tabla, $id){
      $sql = "DELETE FROM ".$tabla." WHERE ".$id." = ?";
      $result = $this->db->query($sql, array($id_dato));
      // log_message('error',$this->db->last_query());
      return $result;
    }
    function deleteAtractivos($id_dato, $tabla, $id, $flg){
      $sql = "DELETE FROM ".$tabla." WHERE ".$id." = ? AND flg_paquet_ofert = ?";
      $result = $this->db->query($sql, array($id_dato, $flg));
      // log_message('error',$this->db->last_query());
      return $result;
    }
    function getComentarios(){
      $sql = "SELECT o.*,
                     DATE_FORMAT(o.fecha, '%M %d, %Y') AS fecha_coment
               FROM opiniones o ORDER BY o.Id DESC LIMIT 5";
      $result = $this->db->query($sql);
      return $result->result();
    }
    function getPaquetesByBusqueda($texto = null){
      $sql = "SELECT b.*,
                     b.lugar titulo,
                     a.lugar,
                     a.descripcion AS detalle,
                     a.dias
                FROM paquetes b,
                     atractivos a
               WHERE b.lugar LIKE ?
                 AND a.flg_paquet_ofert = 2
                 AND a.id_paquetes = b.id";
      $result = $this->db->query($sql,array('%'.$texto.'%'));
      return $result->result();
    }
    function getOfertasByBusqueda($texto = null){
      $sql = "SELECT p.*,
                     a.lugar,
                     a.descripcion AS detalle,
                     a.dias
                FROM ofertas p,
                     atractivos a
               WHERE a.id_paquetes = p.Id
                 AND a.flg_paquet_ofert = 1
                 AND (p.nombre  LIKE ?
                  OR a.descripcion LIKE ?
                  OR a.lugar   LIKE ?)";
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