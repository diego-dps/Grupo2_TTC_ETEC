package com.example.sgbr.model;

public class Mesa {

    private String qr_Code;
    private String numero_Mesa;
    private String chamada_Mesa;

    public Mesa(String chamada_Mesa){
        this.qr_Code = qr_Code;
        this.numero_Mesa = numero_Mesa;
        this.chamada_Mesa = chamada_Mesa;
    }

    public String getQr_Code() {
        return qr_Code;
    }

    public void setQr_Code(String qr_Code) {
        this.qr_Code = qr_Code;
    }

    public String getNumero_Mesa() {
        return numero_Mesa;
    }

    public void setNumero_Mesa(String numero_Mesa) {
        this.numero_Mesa = numero_Mesa;
    }

    public String getChamada_Mesa() {
        return chamada_Mesa;
    }

    public void setChamada_Mesa(String chamada_Mesa) {
        this.chamada_Mesa = chamada_Mesa;
    }
}
