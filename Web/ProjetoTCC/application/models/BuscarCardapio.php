<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuscarCardapio extends CI_Model {

    public function buscarTodos(){
        return $this->db->get("Cardapio")->result_array();
    }
}