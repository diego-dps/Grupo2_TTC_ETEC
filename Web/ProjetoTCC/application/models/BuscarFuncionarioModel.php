<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuscarFuncionarioModel extends CI_Model {

    public function buscarFuncionario(){
        $this->db->where("Ativo = 1");
        $this->db->order_by('nome_Funcionario', 'asc');
        return $this->db->get("funcionario")->result_array();
    }

    public function buscar(){

        $termo = $this->input->post('pesquisar');
        $this->db->select('*');
        $this->db->like('nome_Funcionario', $termo);
        $this->db->or_like('cpf_Funcionario', $termo);
        $this->db->or_like('telefone_Funcionario', $termo);
        $this->db->or_like('email_Funcionario', $termo);
        return $this->db->get("funcionario")->result_array();
    }
}