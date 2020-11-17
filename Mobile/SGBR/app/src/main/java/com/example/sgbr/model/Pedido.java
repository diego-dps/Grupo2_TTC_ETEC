package com.example.sgbr.model;

import java.util.Date;

public class Pedido {

    private String cod_Pedido;
    private String horario_Pedido;
    private String observacao_Pedido;
    private String qr_Code;

    public Pedido() {

    }

    public Pedido(String observacao_Pedido, String qr_Code) {
        this.observacao_Pedido = observacao_Pedido;
        this.qr_Code = qr_Code;
    }

    public String getCod_Pedido() {
        return cod_Pedido;
    }

    public void setCod_Pedido(String cod_Pedido) {
        this.cod_Pedido = cod_Pedido;
    }

    public String getHorario_Pedido() {
        return horario_Pedido;
    }

    public String getObservacao_Pedido() {
        return observacao_Pedido;
    }

    public void setObservacao_Pedido(String observacao_Pedido) { this.observacao_Pedido = observacao_Pedido; }

    public String getQr_Code() {
        return qr_Code;
    }

    public void setQr_Code(String qr_Code) {
        this.qr_Code = qr_Code;
    }


}
