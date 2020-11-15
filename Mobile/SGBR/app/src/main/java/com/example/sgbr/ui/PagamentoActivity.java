package com.example.sgbr.ui;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.RecyclerView;

import android.content.Context;
import android.os.Bundle;
import android.util.Log;

import com.example.sgbr.R;
import com.example.sgbr.adapter.AdapterItensCardapio;
import com.example.sgbr.adapter.AdapterPagamento;
import com.example.sgbr.api.Conexao;
import com.example.sgbr.api.DataService;
import com.example.sgbr.model.Item;

import java.util.ArrayList;
import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class PagamentoActivity extends AppCompatActivity {

    private Conexao conexao = new Conexao();
    private RecyclerView recyclerView;
    private AdapterPagamento adapterPagamento;
    private List<Item> listaItens = new ArrayList<>();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_pagamento);

        recyclerView = findViewById(R.id.recycler_view_pagamento);

        recuperarItens();

    }

    private void recuperarItens() {

        DataService service = conexao.conexao().create(DataService.class);
        Call<List<Item>> call = service.recuperarItens("1");

        call.enqueue(new Callback<List<Item>>() {
            @Override
            public void onResponse(Call<List<Item>> call, Response<List<Item>> response) {
                if (response.isSuccessful() && response.body() != null){

                    Log.d("Resultado", "Aqui tem informação");
                    listaItens = response.body();
                    for (int i=0; i < listaItens.size(); i++){
                        listaItens.get(i);
                        Log.d("Resultado: ", "Aqui tem informação " + response.code());
                        adapterPagamento = new AdapterPagamento(listaItens, PagamentoActivity.this);
                        recyclerView.setAdapter(adapterPagamento);
                    }
                }
            }

            @Override
            public void onFailure(Call<List<Item>> call, Throwable t) {

            }
        });
    }
}