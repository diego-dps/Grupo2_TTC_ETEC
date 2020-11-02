package com.example.sgbr.model;

import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;

public class Conexao {

    private Retrofit retrofit;

    public Retrofit conexao(){
        //CONFIGURAÇÃO RETROFIT
        retrofit = new  Retrofit.Builder()
                .baseUrl("https://localhost:4000")
                .addConverterFactory(GsonConverterFactory.create())
                .build();

        return retrofit;
    }




}
