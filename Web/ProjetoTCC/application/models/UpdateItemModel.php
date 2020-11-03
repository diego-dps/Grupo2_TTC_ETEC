<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UpdateItemModel extends CI_Model {
    
    function atualizarItem($dados) {
        $data = [
            'nome_Item' => $dados['NomeItem'],
            'descricao_Item' => $dados['Descricao'],
            'preco_Item' => $dados['Preco']
        ];

        $this->db->where('cod_Item', $dados['id_Item']);
        $this->db->set($data);

        return $this->db->update("Item",$data);
    }

}