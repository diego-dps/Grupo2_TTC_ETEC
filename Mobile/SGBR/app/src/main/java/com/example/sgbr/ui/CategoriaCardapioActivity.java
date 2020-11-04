package com.example.sgbr.ui;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.os.Bundle;

import com.example.sgbr.R;
import com.example.sgbr.adapter.AdapterItensCardapio;
import com.example.sgbr.api.DataService;
import com.example.sgbr.model.Conexao;
import com.example.sgbr.model.Item;

import java.util.ArrayList;
import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;
import retrofit2.Retrofit;

public class CategoriaCardapioActivity extends AppCompatActivity {

    private Conexao conexao;
    private Retrofit retrofit;
    private DataService service;
    private List<Item> listaItens = new ArrayList<>();
    private RecyclerView recyclerView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_categoria_cardapio);

        retrofit = conexao.conexao();
        service = retrofit.create(DataService.class);
        recyclerView = findViewById(R.id.recyclerciew_categoria_cardapio);

        //Lista de Itens
        recuperarItens();

        //Configura o Adapter
        AdapterItensCardapio itensCardapio = new AdapterItensCardapio(listaItens);

        //Configura o RecycleView
        RecyclerView.LayoutManager layoutManager = new LinearLayoutManager(getApplicationContext());
        recyclerView.setLayoutManager(layoutManager);
        recyclerView.setHasFixedSize(true);
        recyclerView.setAdapter(itensCardapio);
    }

    private void recuperarItens(){

        Call<List<Item>> call = service.recuperarItens();

        call.enqueue(new Callback<List<Item>>() {
            @Override
            public void onResponse(Call<List<Item>> call, Response<List<Item>> response) {
                if (response.isSuccessful()){
                    listaItens = response.body();
                }

            }

            @Override
            public void onFailure(Call<List<Item>> call, Throwable t) {

            }
        });
    }

    private void inserirItem(){

        Item item = new Item(null, null, null, null, null, null);
        Call<Item> call = service.inserirItem(item);

        call.enqueue(new Callback<Item>() {
            @Override
            public void onResponse(Call<Item> call, Response<Item> response) {

            }

            @Override
            public void onFailure(Call<Item> call, Throwable t) {

            }
        });
    }

    private void  atualizarItem(){
        Item item = new Item(null, null, null, null, null, null);
        Call<Item> call = service.atualizarItem(1, item);

        call.enqueue(new Callback<Item>() {
            @Override
            public void onResponse(Call<Item> call, Response<Item> response) {

            }

            @Override
            public void onFailure(Call<Item> call, Throwable t) {

            }
        });
    }

    private  void removerItem(){

        Call<Void> call = service.removerItem(1);

        call.enqueue(new Callback<Void>() {
            @Override
            public void onResponse(Call<Void> call, Response<Void> response) {

            }

            @Override
            public void onFailure(Call<Void> call, Throwable t) {

            }
        });
    }
}