package com.example.sgbr.ui;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.content.Context;
import android.os.Bundle;
import android.util.Log;

import com.example.sgbr.R;
import com.example.sgbr.adapter.AdapterItensCardapio;
import com.example.sgbr.adapter.AdapterItensCarrinho;
import com.example.sgbr.api.Conexao;
import com.example.sgbr.api.DataService;
import com.example.sgbr.model.Item;

import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class CarrinhoComprasActivity extends AppCompatActivity {

    private Conexao conxao = new Conexao();
    private List<Item> listaItens;
    private RecyclerView recyclerView;
    private AdapterItensCarrinho adapterItensCarrinho;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_carrinho_compras);

        recyclerView = findViewById(R.id.recyclerciew_carrinho_compras);

        adapterItensCarrinho = new AdapterItensCarrinho(listaItens, CarrinhoComprasActivity.this);
        recyclerView.setLayoutManager(new LinearLayoutManager(this));
        recyclerView.setHasFixedSize(true);

        recuperarItens();
    }

    private void recuperarItens() {

        DataService service = conxao.conexao().create(DataService.class);
        Call<List<Item>> call = service.recuperarItens();

        call.enqueue(new Callback<List<Item>>() {
            @Override
            public void onResponse(Call<List<Item>> call, Response<List<Item>> response) {
                if (response.isSuccessful() && response.body() != null){

                    Log.d("Resultado", "Aqui tem informação");
                    listaItens = response.body();
                    for (int i=0; i < listaItens.size(); i++){
                        listaItens.get(i);
                        Log.d("Resultado: ", "Aqui tem informação " + response.code());
                        adapterItensCarrinho = new AdapterItensCarrinho(listaItens, CarrinhoComprasActivity.this);
                        recyclerView.setAdapter(adapterItensCarrinho);
                    }
                }
            }

            @Override
            public void onFailure(Call<List<Item>> call, Throwable t) {

            }
        });
    }
}