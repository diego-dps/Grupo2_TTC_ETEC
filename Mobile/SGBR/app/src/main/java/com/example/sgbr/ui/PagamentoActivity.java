package com.example.sgbr.ui;

import android.os.Bundle;
import android.util.Log;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.RecyclerView;

import com.example.sgbr.R;
import com.example.sgbr.adapter.AdapterPagamento;
import com.example.sgbr.api.Conexao;
import com.example.sgbr.api.DataService;
import com.example.sgbr.model.ItemPedido;
import com.example.sgbr.model.Pedido;

import java.util.ArrayList;
import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class PagamentoActivity extends AppCompatActivity {

    private Conexao conexao = new Conexao();
    private RecyclerView recyclerView;
    private AdapterPagamento adapterPagamento;
    private List<ItemPedido> listaItensPedido = new ArrayList<>();
    private List<Pedido> listaPedido = new ArrayList<>();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_pagamento);

        recyclerView = findViewById(R.id.recycler_view_pagamento);

        recuperarItensPedidos();

    }


    private void recuperarItensPedidos() {
        DataService service = conexao.conexao().create(DataService.class);
        Call<List<Pedido>> callPedido = service.recuperarPedido();

        callPedido.enqueue(new Callback<List<Pedido>>() {
            @Override
            public void onResponse(Call<List<Pedido>> call, Response<List<Pedido>> response) {
                if (response.isSuccessful()){
                    listaPedido = response.body();
                        Pedido pedido = listaPedido.get(listaPedido.size() -1);

                        DataService service = conexao.conexao().create(DataService.class);
                        Call<List<ItemPedido>> callItemPedido = service.recuperarItemPedido(pedido.getCod_Pedido());

                        callItemPedido.enqueue(new Callback<List<ItemPedido>>() {
                            @Override
                            public void onResponse(Call<List<ItemPedido>> call, Response<List<ItemPedido>> response) {
                                if (response.isSuccessful() && response.body() != null){

                                    Log.d("Resultado", "Aqui tem informação");
                                    listaItensPedido = response.body();
                                    for (int i=0; i < listaItensPedido.size(); i++){
                                        listaItensPedido.get(i);
                                        Log.d("Resultado: ", "Aqui tem informação " + response.code());
                                        adapterPagamento = new AdapterPagamento(listaItensPedido, PagamentoActivity.this);
                                        recyclerView.setAdapter(adapterPagamento);
                                    }
                                }
                            }

                            @Override
                            public void onFailure(Call<List<ItemPedido>> call, Throwable t) {

                            }
                        });
                }
            }

            @Override
            public void onFailure(Call<List<Pedido>> call, Throwable t) {

            }
        });
    }
}