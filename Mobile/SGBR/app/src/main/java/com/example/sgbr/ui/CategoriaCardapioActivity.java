package com.example.sgbr.ui;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.DividerItemDecoration;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.LinearLayout;
import android.widget.TextView;
import android.widget.Toast;

import com.example.sgbr.R;
import com.example.sgbr.adapter.AdapterItensCardapio;
import com.example.sgbr.api.DataService;
import com.example.sgbr.api.Conexao;
import com.example.sgbr.model.Cardapio;
import com.example.sgbr.model.Item;


import java.util.ArrayList;
import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class CategoriaCardapioActivity extends AppCompatActivity {

    private Conexao conexao = new Conexao();
    private RecyclerView recyclerView;
    private AdapterItensCardapio adapterItensCardapio;
    private List<Item> listaItens = new ArrayList<>();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_categoria_cardapio);

        recyclerView = findViewById(R.id.recyclerciew_categoria_cardapio);

        //Configura o Adapter
        adapterItensCardapio = new AdapterItensCardapio(CategoriaCardapioActivity.this,listaItens);

        //Configura o RecycleView
        recyclerView.setLayoutManager(new LinearLayoutManager(this));
        recyclerView.setHasFixedSize(true);
        recyclerView.addItemDecoration(new DividerItemDecoration(this, LinearLayout.VERTICAL));

        recuperarItens();
    }

    public void recuperarItens(){
        Bundle extras = getIntent().getExtras();
        if (extras != null) {
            String valor = extras.getString("key");
            DataService service = conexao.conexao().create(DataService.class);
            Call<List<Item>> call = service.recuperarItens(valor);

            call.enqueue(new Callback<List<Item>>() {
                @Override
                public void onResponse(Call<List<Item>> call, Response<List<Item>> response) {
                    if (response.isSuccessful() && response.body() != null) {

                        Log.d("Resultado", "Aqui tem informação");
                        listaItens = response.body();
                        for (int i = 0; i < listaItens.size(); i++) {
                            listaItens.get(i);
                            Log.d("Resultado: ", "Aqui tem informação " + response.code());
                            adapterItensCardapio = new AdapterItensCardapio(CategoriaCardapioActivity.this, listaItens);
                            recyclerView.setAdapter(adapterItensCardapio);
                        }
                    }

                }

                @Override
                public void onFailure(Call<List<Item>> call, Throwable t) {
                    Log.d("Resultado", "onFailure: Falhou" + t.getMessage());

                }
            });
        }
    }

   /* private void Resultado(JSONArray jsonArray) {

        for (int i=0; i < jsonArray.length(); i++){
            try {
                JSONObject object = jsonArray.getJSONObject(i);
                Item item = new Item();
                item.setNome_Item(object.getString("nome_Item"));
                listaItens.add(item);
            } catch (JSONException e) {
                e.printStackTrace();
            }
            adapterItensCardapio = new AdapterItensCardapio(CategoriaCardapioActivity.this,listaItens);
            recyclerView.setAdapter(adapterItensCardapio);
        }
    }*/


    private void inserirItem(){

        DataService service = conexao.conexao().create(DataService.class);
        Item item = new Item(null, null, null, null, null, null);
        Call<Item> call = service.inserirItem(item);

        call.enqueue(new Callback<Item>() {
            @Override
            public void onResponse(Call<Item> call, Response<Item> response) {

            }

            @Override
            public void onFailure(Call<Item> call, Throwable t) {
                Toast.makeText(CategoriaCardapioActivity.this, "Falhou", Toast.LENGTH_SHORT).show();

            }
        });
    }

    private void  atualizarItem(){

        DataService service = conexao.conexao().create(DataService.class);
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

        DataService service = conexao.conexao().create(DataService.class);
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

    public void VoltarCardapio(View v) {

        Intent it = new Intent(CategoriaCardapioActivity.this, CardapioActivity.class);
        startActivity(it);
    }
}