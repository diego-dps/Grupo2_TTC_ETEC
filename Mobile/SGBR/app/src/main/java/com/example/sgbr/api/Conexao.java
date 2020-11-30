package com.example.sgbr.api;

import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;

public class Conexao {

    private Retrofit retrofit;

    public Retrofit conexao(){
        //CONFIGURAÇÃO RETROFIT
        retrofit = new  Retrofit.Builder()
<<<<<<< HEAD
                .baseUrl("http://192.168.0.112:3000")
=======
                .baseUrl("http://192.168.0.14:3000")
>>>>>>> abfb29f8c9c240146c035d1d98e998e29237f08d
                .addConverterFactory(GsonConverterFactory.create())
                .build();
        return retrofit;
    }




}
