<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuscarItensCardapio extends CI_Model {

    public function buscarTodos(){
        $termo = $this->input->post('id');
        $where = "cod_Cardapio='$termo' and Ativo=1";
        $this->db->where($where);
        return $this->db->get("item")->result_array();
    }

}