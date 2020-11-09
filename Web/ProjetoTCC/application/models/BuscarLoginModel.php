<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuscarLoginModel extends CI_Model {
    
    public function logarUsuario($usuario, $senha){
        
        $where = "email_Funcionario='$usuario' and senha='$senha' and Ativo=1";
        $this->db->where($where);

        $resultado = $this->db->get("funcionario")->row_array();
        return $resultado;
    }

    public function verificar_dados($email){
        $where = "email_Funcionario='$email' and Ativo=1";
        $this->db->where($where);

        $resultado = $this->db->get("funcionario")->row_array();
        if($resultado > 0){
            enviar_email($email);
        }else{

        }
    }

    public function enviar_email($email){
        mail($email, "Teste de recuperar senha", "Minha semha é essa");
    }
}
?>