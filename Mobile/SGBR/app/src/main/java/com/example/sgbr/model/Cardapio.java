package com.example.sgbr.model;

public class Cardapio {
    String cod_Cardapio;
    String categoria_Cardapio;
    String foto_Cardapio;

    public Cardapio(){
    }

    public Cardapio(String categoria_Cardapio, String foto_Cardapio) {
        this.categoria_Cardapio = categoria_Cardapio;
        this.foto_Cardapio = foto_Cardapio;
    }

    public String getCod_Cardapio() {
        return cod_Cardapio;
    }

    public void setCod_Cardapio(String cod_Cardapio) {
        this.cod_Cardapio = cod_Cardapio;
    }

    public String getCategoria_Cardapio() {
        return categoria_Cardapio;
    }

    public void setCategoria_Cardapio(String categoria_Cardapio) {
        this.categoria_Cardapio = categoria_Cardapio;
    }

    public String getFoto_Cardapio() {
        return foto_Cardapio;
    }

    public void setFoto_Cardapio(String foto_Cardapio) {
        this.foto_Cardapio = foto_Cardapio;
    }


}
