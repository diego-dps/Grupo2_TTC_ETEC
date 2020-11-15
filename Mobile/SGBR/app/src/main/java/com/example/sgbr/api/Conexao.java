package com.example.sgbr.api;

import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;

public class Conexao {

    private Retrofit retrofit;

    public Retrofit conexao(){
        //CONFIGURAÇÃO RETROFIT
        retrofit = new  Retrofit.Builder()
<<<<<<< HEAD
                .baseUrl("http://192.168.15.8:3000")
=======
                .baseUrl("http://192.168.0.14:3000")
>>>>>>> c37831cb1df3bea27bd80f37fbddfca232b0e893
                .addConverterFactory(GsonConverterFactory.create())
                .build();

        return retrofit;
    }




}
