package com.example.sgbr.model;

public class Mesa {

    private String qr_Code;
    private String numero_Mesa;

    public Mesa(String qr_Code, String numero_Mesa){
        this.qr_Code = qr_Code;
        this.numero_Mesa = numero_Mesa;
    }

    public Mesa(String numero_Mesa) {
        this.numero_Mesa = numero_Mesa;
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
}
