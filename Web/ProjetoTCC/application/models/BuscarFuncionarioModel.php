<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuscarFuncionarioModel extends CI_Model {

    public function buscarFuncionario(){
        return $this->db->get("funcionario")->result_array();
    }

}