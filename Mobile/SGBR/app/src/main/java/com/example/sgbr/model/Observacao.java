package com.example.sgbr.model;

public class Observacao {

    private String cod_Pedido;
    public String cod_Item;
    public String observacao_Pedido;

    public Observacao(String cod_Pedido, String cod_Item, String observacao_Pedido) {
        this.cod_Pedido = cod_Pedido;
        this.cod_Item = cod_Item;
        this.observacao_Pedido = observacao_Pedido;
    }

    public String getCod_Pedido() {
        return cod_Pedido;
    }

    public void setCod_Pedido(String cod_Pedido) {
        this.cod_Pedido = cod_Pedido;
    }

    public String getcod_Item() {
        return cod_Item;
    }

    public void setcod_Item(String cod_Item) {
        this.cod_Item = cod_Item;
    }

    public String getobservacao_Pedido() {
        return observacao_Pedido;
    }

    public void setobservacao_Pedido(String observacao_Pedido) { this.observacao_Pedido = observacao_Pedido; }
}
