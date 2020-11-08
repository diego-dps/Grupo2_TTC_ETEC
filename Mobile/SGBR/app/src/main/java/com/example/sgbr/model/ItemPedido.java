package com.example.sgbr.model;

public class ItemPedido {

    public ItemPedido(String cod_Pedido, String cod_Item, int quantidade) {
        this.cod_Pedido = cod_Pedido;
        this.cod_Item = cod_Item;
        this.quantidade = quantidade;
    }

    private String cod_Pedido;
    private String cod_Item;
    private int quantidade;

    public String getCod_Pedido() {
        return cod_Pedido;
    }

    public void setCod_Pedido(String cod_Pedido) {
        this.cod_Pedido = cod_Pedido;
    }

    public String getCod_Item() {
        return cod_Item;
    }

    public void setCod_Item(String cod_Item) {
        this.cod_Item = cod_Item;
    }

    public int getQuantidade() {
        return quantidade;
    }

    public void setQuantidade(int quantidade) {
        this.quantidade = quantidade;
    }
}
