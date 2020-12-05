package com.example.sgbr.model;

public class Funcionario {
    private String cod_Funcionario;
    private String nome_Funcionario;
    private String cpf_Funcionario;
    private String telefone_Funcionario;
    private String cargo_Funcionario;
    private String Ativo;
    private String email_Funcionario;
    private String senha;

    public Funcionario(String nome_Funcionario, String cpf_Funcionario, String telefone_Funcionario, String cargo_Funcionario, String ativo, String email_Funcionario, String senha) {
        this.nome_Funcionario = nome_Funcionario;
        this.cpf_Funcionario = cpf_Funcionario;
        this.telefone_Funcionario = telefone_Funcionario;
        this.cargo_Funcionario = cargo_Funcionario;
        Ativo = ativo;
        this.senha = senha;
        this.email_Funcionario = email_Funcionario;
    }

    public String getCod_Funcionario() {
        return cod_Funcionario;
    }

    public void setCod_Funcionario(String cod_Funcionario) {
        this.cod_Funcionario = cod_Funcionario;
    }

    public String getNome_Funcionario() {
        return nome_Funcionario;
    }

    public void setNome_Funcionario(String nome_Funcionario) {
        this.nome_Funcionario = nome_Funcionario;
    }

    public String getCpf_Funcionario() {
        return cpf_Funcionario;
    }

    public void setCpf_Funcionario(String cpf_Funcionario) {
        this.cpf_Funcionario = cpf_Funcionario;
    }

    public String getTelefone_Funcionario() {
        return telefone_Funcionario;
    }

    public void setTelefone_Funcionario(String telefone_Funcionario) {
        this.telefone_Funcionario = telefone_Funcionario;
    }

    public String getCargo_Funcionario() {
        return cargo_Funcionario;
    }

    public void setCargo_Funcionario(String cargo_Funcionario) {
        this.cargo_Funcionario = cargo_Funcionario;
    }

    public String getAtivo() {
        return Ativo;
    }

    public void setAtivo(String ativo) {
        Ativo = ativo;
    }

    public String getEmail_Funcionario() {
        return email_Funcionario;
    }

    public void setEmail_Funcionario(String email_Funcionario) {
        this.cod_Funcionario = cod_Funcionario;
    }

    public String getSenha() {
        return senha;
    }

    public void setSenha(String senha) {
        this.senha = senha;
    }
}

