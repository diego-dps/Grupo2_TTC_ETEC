<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuscarItemModel extends CI_Model {

    public function buscarTodos(){
        return $this->db->get("item")->result_array();
    }

}