<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UpdateItemModel extends CI_Model {
    
    function atualizarItem($dados, $nome_arquivo) {
        $data = [
            'nome_Item' => $dados['NomeItem'],
            'descricao_Item' => $dados['Descricao'],
            'preco_Item' => $dados['Preco'],
            'foto_Item' => $nome_arquivo
        ];

        $this->db->where('cod_Item', $dados['id_Item']);
        $this->db->set($data);

        return $this->db->update("Item",$data);
    }

}