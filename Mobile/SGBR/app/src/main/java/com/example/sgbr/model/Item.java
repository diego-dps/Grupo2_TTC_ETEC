package com.example.sgbr.model;

public class Item {

    private String cod_Item;
    private String cod_Cardapio;
    private String nome_Item;
    private String descricao_Item;
    private String preco_Item;
    private String Ativo;
    private String foto_Item;

    public Item(String cod_Cardapio, String nome_Item, String descricao_Item, String preco_Item, String ativo, String foto_Item) {
        this.cod_Cardapio = cod_Cardapio;
        this.nome_Item = nome_Item;
        this.descricao_Item = descricao_Item;
        this.preco_Item = preco_Item;
        Ativo = ativo;
        this.foto_Item = foto_Item;
    }

    public String getCod_Item() {
        return cod_Item;
    }

    public void setCod_Item(String cod_Item) {
        this.cod_Item = cod_Item;
    }

    public String getCod_Cardapio() {
        return cod_Cardapio;
    }

    public void setCod_Cardapio(String cod_Cardapio) {
        this.cod_Cardapio = cod_Cardapio;
    }

    public String getNome_Item() {
        return nome_Item;
    }

    public void setNome_Item(String nome_Item) {
        this.nome_Item = nome_Item;
    }

    public String getDescricao_Item() {
        return descricao_Item;
    }

    public void setDescricao_Item(String descricao_Item) {
        this.descricao_Item = descricao_Item;
    }

    public String getPreco_Item() {
        return preco_Item;
    }

    public void setPreco_Item(String preco_Item) {
        this.preco_Item = preco_Item;
    }

    public String getAtivo() {
        return Ativo;
    }

    public void setAtivo(String ativo) {
        Ativo = ativo;
    }

    public String getFoto_Item() {
        return foto_Item;
    }

    public void setFoto_Item(String foto_Item) {
        this.foto_Item = foto_Item;
    }

}
