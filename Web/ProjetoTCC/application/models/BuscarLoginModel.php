<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuscarLoginModel extends CI_Model {
    
    public function logarUsuario($usuario, $senha){
        
        $where = "email_Funcionario='$usuario' and senha='$senha' and Ativo=1";
        $this->db->where($where);

        $resultado = $this->db->get("funcionario")->row_array();
        return $resultado;
    }
}
?>