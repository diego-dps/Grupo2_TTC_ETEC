<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExcluirFuncionarioModel extends CI_Model {
    
    function excluirFuncionario($id) {
        
        $data = [
            'Ativo' => '0'
        ];

        $this->db->where('cod_Funcionario', $id);
        $this->db->set($data);

        return $this->db->update("Funcionario",$data);
    }

}