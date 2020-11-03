<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuscarPedidoModel extends CI_Model {

    public function buscarpedidos(){
        return $this->db->select('c.cod_Pedido, d.numero_Mesa, a.cod_Item, b.nome_Item, c.observacao_Pedido, a.quantidade, c.horario_Pedido, b.cod_Cardapio, e.categoria_Cardapio')
        ->from('itempedido a, item b, pedido c, mesa d, cardapio e')
        ->where('a.cod_Item = b.cod_Item and c.cod_Pedido = a.cod_Pedido and d.qr_Code = c.qr_Code and b.cod_Cardapio = e.cod_Cardapio')
        ->get()->result_array();
    } 
}