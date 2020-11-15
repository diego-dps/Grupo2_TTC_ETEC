package com.example.sgbr.api;

import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;

public class Conexao {

    private Retrofit retrofit;

    public Retrofit conexao(){
        //CONFIGURAÇÃO RETROFIT
        retrofit = new  Retrofit.Builder()
                .baseUrl("http://192.168.15.8:3000")
                .addConverterFactory(GsonConverterFactory.create())
                .build();

        return retrofit;
    }




}
