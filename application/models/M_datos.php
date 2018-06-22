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
    function updateDatos($arrayData, $id, $tabla, $col = 'Id'){
      $this->db->where($col  , $id);
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
    function getComentarios2(){
      $sql = "SELECT o.*,
                     DATE_FORMAT(o.fecha, '%M %d, %Y') AS fecha_coment
               FROM opiniones o ORDER BY o.Id DESC";
      $result = $this->db->query($sql);
      return $result->result();
    }
    function getPaquetesByBusqueda($texto = null,$id = null){
      $sql = "SELECT b.Id,
                     b.lugar titulo,
                     b.dias,
                     b.imagen,
                     group_concat(CONCAT(UPPER(LEFT(a.lugar,1)),LOWER(SUBSTR(a.lugar,2)))) atractivos,
                     group_concat(CONCAT(UPPER(a.lugar),'*',a.descripcion,'*',a.Id) SEPARATOR '|') lugar_detalle,
                     ( SELECT group_concat(CONCAT(dxa.desc_lugar,'*',dxa.desc_viaje)  SEPARATOR '|')
                         FROM dias_x_atractivos dxa
                        WHERE dxa.id_paquete = b.id
                          AND dxa.flg_paquet_ofert = 2
                    ORDER BY id_dia) desc_dias
                FROM paquetes b,
                     atractivos a
               WHERE a.flg_paquet_ofert = 2
                 AND a.id_paquetes = b.id
                 AND b.lugar LIKE ?
                 AND CASE
                          WHEN ? IS NOT NULL THEN b.Id = ?
                          ELSE 1 = 1
                    END
            GROUP BY b.Id";
      $result = $this->db->query($sql,array('%'.$texto.'%',$id,$id));
      return $result->result();
    }
    function getOfertasByBusqueda($texto = null,$id = null){
      $sql = "SELECT o.id,
                     o.nombre titulo,
                     o.dias,
                     o.img,
                     o.desc_general,
                     group_concat(CONCAT(UPPER(LEFT(a.lugar,1)),LOWER(SUBSTR(a.lugar,2)))) atractivos,
                     group_concat(CONCAT(UPPER(a.lugar),'*',a.descripcion,'*',a.Id) SEPARATOR '|') lugar_detalle
                FROM ofertas o,
                     atractivos a
               WHERE a.id_paquetes = o.Id
                 AND a.flg_paquet_ofert = 1
                 AND (o.nombre  LIKE ?
                  OR a.descripcion LIKE ?
                  OR a.lugar   LIKE ?)
                 AND CASE
                          WHEN ? IS NOT NULL THEN o.id = ?
                          ELSE 1 = 1
                     END
            GROUP BY id";
      $result = $this->db->query($sql,array('%'.$texto.'%','%'.$texto.'%','%'.$texto.'%',$id,$id));
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

    function countById($id_dato, $tabla, $id, $flg){
      $sql = "SELECT COUNT(1) cant
                FROM ".$tabla."
               WHERE ".$id." = ?
                 AND flg_paquet_ofert = ? ";
      $result = $this->db->query($sql,array($id_dato, $flg));
      // log_message('error',$this->db->last_query());
      if($result->num_rows() > 0){
        return $result->row()->cant;
      } else {
          return 0;
      }
    }

    function getDiasById($idPaquete,$flgPaqOff){
      $sql =  "SELECT Id id,
                      desc_lugar,
                      desc_viaje
                 FROM dias_x_atractivos
                WHERE id_paquete = ?
                  AND flg_paquet_ofert = ?
             ORDER BY id_dia";
      $result = $this->db->query($sql,array($idPaquete,$flgPaqOff));
      return $result->result();
    }

    function getNextDia($idPaquete,$flgPaqOff){
      $sql =  "SELECT MAX(id_dia) + 1 dia
                 FROM dias_x_atractivos
                WHERE id_paquete = ?
                  AND flg_paquet_ofert = ?";
      $result = $this->db->query($sql,array($idPaquete,$flgPaqOff));
      // log_message('error',$result->num_rows());
      if($result->num_rows() > 0 && $result->row()->dia != null){
        return $result->row()->dia;
      } else {
        return 1;
      }
    }

    function deleteDias($idPaquete,$flgPaqOff){
      $sql = "DELETE FROM dias_x_atractivos WHERE id_paquete = ?
                                              AND flg_paquet_ofert = ?";
      $result = $this->db->query($sql, array($idPaquete,$flgPaqOff));
      return $result;
    }
}