<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ubicacion_model extends CI_Model {

function devolverDepartamentos()
    {
        $sql = $this->db->query("SELECT iddepartamento,dep_pdescripcion FROM departamento");
        foreach ($sql->result() as $reg) {
            $data[$reg->iddepartamento] = $reg->dep_pdescripcion;
        }
        return $data;
    }

function devolverProvincias()
    {
        $sql = $this->db->query("SELECT idprovincia,pro_descripcion FROM provincia");
        foreach ($sql->result() as $reg) {
            $data[$reg->idprovincia] = $reg->pro_descripcion;
        }
        return $sql->result();
    }

function devolverDistritos()
    {
        $sql = $this->db->query("SELECT iddistrito,dis_descripcion FROM distrito");
        foreach ($sql->result() as $reg) {
            $data[$reg->iddistrito] = $reg->dis_descripcion;
        }
        return $sql->result;
    }
}
?>
