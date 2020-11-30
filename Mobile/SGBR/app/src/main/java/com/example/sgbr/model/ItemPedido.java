package com.example.sgbr.model;

public class ItemPedido {

    private String cod_Pedido;
    private String cod_Item;
    private String numero_Mesa;
    private String nome_Item;
    private String observacao_Pedido;
    private String quantidade;
    private String valor_Item;
    private String foto_Item;

    public ItemPedido(String cod_Pedido, String cod_Item, String quantidade, String valor_Item, String foto_Item, String observacao_Pedido) {
        this.cod_Pedido = cod_Pedido;
        this.cod_Item = cod_Item;
        this.numero_Mesa = numero_Mesa;
        this.nome_Item = nome_Item;
        this.observacao_Pedido = observacao_Pedido;
        this.quantidade = quantidade;
        this.valor_Item = valor_Item;
        this.foto_Item = foto_Item;
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

    public String getNumero_Mesa() {
        return numero_Mesa;
    }

    public void setNumero_Mesa(String numero_Mesa) {
        this.numero_Mesa = numero_Mesa;
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

    public String getQuantidade() {
        return quantidade;
    }

    public void setQuantidade(String quantidade) {
        this.quantidade = quantidade;
    }

    public String getPreco() { return valor_Item; }

    public void setPreco(String valor_Item) {
        this.valor_Item = valor_Item;
    }

    public String getFoto_Item() {
        return foto_Item;
    }

    public void setFoto_Item(String foto_Item) {
        this.foto_Item = foto_Item;
    }

}
