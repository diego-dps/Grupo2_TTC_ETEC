<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExcluirItensModel extends CI_Model {
    
    function excluirItens($id) {
        
        $this->db->where('cod_Item', $id);
        return $this->db->delete("Item");
    }

}