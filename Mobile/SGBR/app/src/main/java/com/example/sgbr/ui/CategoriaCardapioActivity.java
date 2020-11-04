package com.example.sgbr.ui;

import androidx.appcompat.app.AppCompatActivity;
import androidx.core.widget.NestedScrollView;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Toast;

import com.example.sgbr.R;
import com.example.sgbr.adapter.AdapterItensCardapio;
import com.example.sgbr.api.DataService;
import com.example.sgbr.model.Conexao;
import com.example.sgbr.model.Item;
import com.google.gson.JsonArray;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;
import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;

public class CategoriaCardapioActivity extends AppCompatActivity {

    private Conexao conexao = new Conexao();
    RecyclerView recyclerView;
    private AdapterItensCardapio adapterItensCardapio;
    private List<Item> listaItens = new ArrayList<>();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_categoria_cardapio);

        recyclerView = findViewById(R.id.recyclerciew_categoria_cardapio);

        //Lista de Itens

        //Configura o Adapter
        adapterItensCardapio = new AdapterItensCardapio(CategoriaCardapioActivity.this, listaItens);

        //Configura o RecycleView

        recyclerView.setLayoutManager(new LinearLayoutManager(this));
        recyclerView.setHasFixedSize(true);
        recyclerView.setAdapter(adapterItensCardapio);

        recuperarItens();

    }

    public void recuperarItens(){

        DataService service = conexao.conexao().create(DataService.class);
        Call<Item> call = service.recuperarItens();

        call.enqueue(new Callback<Item>() {
            @Override
            public void onResponse(Call<Item> call, Response<Item> response) {
                if(response.isSuccessful() && response.body() != null) {
                    try {
                        JSONArray jsonArray = new JSONArray(response.body());

                        Resultado(jsonArray);
                    } catch (JSONException e) {
                        e.printStackTrace();
                    }
                }
            }

            @Override
            public void onFailure(Call<Item> call, Throwable t) {
                Log.d("", "onFailure: Falhou");
            }
        });
    }

    private void Resultado(JSONArray jsonArray) {
        for (int i = 0; i < jsonArray.length(); i++){
            try {
                JSONObject object = jsonArray.getJSONObject(i);
                Item item = new Item();
                item.setNome_Item(object.getString("cod_Item"));
                listaItens.add(item);
            } catch (JSONException e) {
                e.printStackTrace();
            }
            adapterItensCardapio = new AdapterItensCardapio(CategoriaCardapioActivity.this, listaItens);
            recyclerView.setAdapter(adapterItensCardapio);
        }
    }


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
}