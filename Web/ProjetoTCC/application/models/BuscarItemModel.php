<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuscarItemModel extends CI_Model {

    public function buscarTodos(){
        $this->db->where("Ativo = 1");
        $this->db->order_by('nome_Item', 'asc');
        return $this->db->get("item")->result_array();
    }

    public function buscar(){

        $termo = $this->input->post('pesquisar');
        $this->db->select('*');
        $this->db->like('nome_Item', $termo);
        return $this->db->get("item")->result_array();
    }

}