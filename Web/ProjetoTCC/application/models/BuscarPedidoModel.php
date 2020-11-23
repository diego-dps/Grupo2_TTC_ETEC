<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuscarPedidoModel extends CI_Model {

    public function buscarpedidos(){
        return $this->db->select('c.cod_Pedido, d.numero_Mesa, a.cod_Item, b.nome_Item, c.observacao_Pedido, a.quantidade, c.horario_Pedido, b.cod_Cardapio, e.categoria_Cardapio, c.status_Pedido')
        ->from('itempedido a, item b, pedido c, mesa d, cardapio e')
        ->where('a.cod_Item = b.cod_Item and c.cod_Pedido = a.cod_Pedido and d.qr_Code = c.qr_Code and b.cod_Cardapio = e.cod_Cardapio')
        ->order_by('c.cod_Pedido asc')
        ->get()->result_array();
    } 

    public function buscarpedidosconcluidos(){
        return $this->db->select('c.cod_Pedido, d.numero_Mesa, a.cod_Item, b.nome_Item, c.observacao_Pedido, a.quantidade, c.horario_Pedido, b.cod_Cardapio, e.categoria_Cardapio, c.status_Pedido')
        ->from('itempedido a, item b, pedido c, mesa d, cardapio e')
        ->where('a.cod_Item = b.cod_Item and c.cod_Pedido = a.cod_Pedido and d.qr_Code = c.qr_Code and b.cod_Cardapio = e.cod_Cardapio and c.status_Pedido = "Concluido"')
        ->order_by('c.cod_Pedido asc')
        ->get()->result_array();
    }

    public function buscarpedidospendentes(){
        return $this->db->select('c.cod_Pedido, d.numero_Mesa, a.cod_Item, b.nome_Item, c.observacao_Pedido, a.quantidade, c.horario_Pedido, b.cod_Cardapio, e.categoria_Cardapio, c.status_Pedido')
        ->from('itempedido a, item b, pedido c, mesa d, cardapio e')
        ->where('a.cod_Item = b.cod_Item and c.cod_Pedido = a.cod_Pedido and d.qr_Code = c.qr_Code and b.cod_Cardapio = e.cod_Cardapio and c.status_Pedido = "Pendente"')
        ->order_by('c.cod_Pedido asc')
        ->get()->result_array();
    }

    public function buscarpedidosentregues(){
        return $this->db->select('c.cod_Pedido, d.numero_Mesa, a.cod_Item, b.nome_Item, c.observacao_Pedido, a.quantidade, c.horario_Pedido, b.cod_Cardapio, e.categoria_Cardapio, c.status_Pedido')
        ->from('itempedido a, item b, pedido c, mesa d, cardapio e')
        ->where('a.cod_Item = b.cod_Item and c.cod_Pedido = a.cod_Pedido and d.qr_Code = c.qr_Code and b.cod_Cardapio = e.cod_Cardapio and c.status_Pedido = "Entregue"')
        ->order_by('c.cod_Pedido asc')
        ->get()->result_array();
    }

    public function countpedidosentregues(){
        return $this->db->select('count(status_Pedido)')
        ->from('pedido')
        ->where('status_Pedido = "Entregue"')
        ->get()->result_array();
    }

    public function countpedidospendentes(){
        return $this->db->select('count(status_Pedido)')
        ->from('pedido')
        ->where('status_Pedido = "Pendente"')
        ->get()->result_array();
    }

    public function countpedidosconcluidos(){
        return $this->db->select('count(status_Pedido)')
        ->from('pedido')
        ->where('status_Pedido = "Concluido"')
        ->get()->result_array();
    }

}