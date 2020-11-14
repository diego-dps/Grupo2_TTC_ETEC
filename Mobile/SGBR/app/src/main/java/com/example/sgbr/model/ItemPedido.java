package com.example.sgbr.model;

public class ItemPedido {

    private String cod_Pedido;
    private String cod_Item;
    private String nome_Item;
    private String observacao_Pedido;
    private int quantidade;

    public ItemPedido(String cod_Pedido, String cod_Item, String nome_Item, String observacao_Pedido, int quantidade) {
        this.cod_Pedido = cod_Pedido;
        this.cod_Item = cod_Item;
        this.nome_Item = nome_Item;
        this.observacao_Pedido = observacao_Pedido;
        this.quantidade = quantidade;
    }

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

    public String getnome_Item() {
        return nome_Item;
    }

    public void setnome_Item(String nome_Item) {
        this.nome_Item = nome_Item;
    }

    public String getobservacao_Pedido() {
        return observacao_Pedido;
    }

    public void setobservacao_Pedido(String observacao_Pedido) { this.observacao_Pedido = observacao_Pedido; }

    public int getQuantidade() {
        return quantidade;
    }

    public void setQuantidade(int quantidade) {
        this.quantidade = quantidade;
    }
}
