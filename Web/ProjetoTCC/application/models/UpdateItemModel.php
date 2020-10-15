<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UpdateItemModel extends CI_Model {
    
    function atualizarItem($dados) {
        $this->db->where('cod_Item', $dados['id_Item']);
        $this->db->set($dados);
        return $this->db->update($dados);
    }

}