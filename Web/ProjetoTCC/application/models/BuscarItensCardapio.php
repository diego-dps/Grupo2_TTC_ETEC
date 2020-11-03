<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuscarItensCardapio extends CI_Model {

    public function buscarTodos(){
        $this->db->where("cod_Cardapio = 1 and Ativo = 1");
        $this->db->order_by('nome_Item', 'asc');
        return $this->db->get("item")->result_array();
    }

}