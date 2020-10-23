<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuscarFuncionarioModel extends CI_Model {

    public function buscarFuncionario(){
        $this->db->where("Ativo = 1");
        $this->db->order_by('nome_Funcionario', 'asc');
        return $this->db->get("funcionario")->result_array();
    }

}