package com.example.sgbr.ui;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.AdapterView;
import android.widget.GridView;
import android.widget.Toast;;

import com.example.sgbr.R;
import com.example.sgbr.api.DataService;
import com.example.sgbr.controller.CardapioAdapter;
import com.example.sgbr.model.Cardapio;
import com.example.sgbr.model.Conexao;

import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;
import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;

public class CardapioActivity extends AppCompatActivity {


    private  Retrofit retrofit;
    private DataService service;
    private  List<Cardapio> listaCardapio;
    private Conexao conexao;
    private GridView gridView;
    private String[] tituloCategoria =  {"Prato do Dia", "Churrasco", "Lanches", "Pizzas", "Vegetariana", "Sobremesas"};
    private int[] imagemCategoria = {R.drawable.pratofeito, R.drawable.pratofeito, R.drawable.pratofeito,
            R.drawable.pratofeito, R.drawable.pratofeito, R.drawable.pratofeito
    };


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_cardapio);

        retrofit = conexao.conexao();
        service = retrofit.create(DataService.class);

        gridView = findViewById(R.id.gridView_cardapio);
        CardapioAdapter adapter = new CardapioAdapter(tituloCategoria, imagemCategoria, this);
        gridView.setAdapter(adapter);

        recuperarCardapio();

    }

    private void recuperarCardapio(){

        Call<List<Cardapio>> call = service.recuperarCardapio();

        call.enqueue(new Callback<List<Cardapio>>() {
            @Override
            public void onResponse(Call<List<Cardapio>> call, Response<List<Cardapio>> response) {
                if (response.isSuccessful()){
                    listaCardapio = response.body();
                    for(int i=0; i < listaCardapio.size(); i++){
                        Cardapio cardapio = listaCardapio.get(i);
                        Log.d("resultado", "resultado " + cardapio.getCategoria_Cardapio());

                    }
                }
            }

            @Override
            public void onFailure(Call<List<Cardapio>> call, Throwable t) {

            }
        });
    }

    private void inserirCardapio(){

        Cardapio cardapio = new Cardapio("Churrasco", "imagem");
        Call<Cardapio> call = service.inserirCardapio(cardapio);

        call.enqueue(new Callback<Cardapio>() {
            @Override
            public void onResponse(Call<Cardapio> call, Response<Cardapio> response) {
                if (response.isSuccessful()){
                    //CASO RETORNAR ALGUM DADO TRATAR AQUI
                }
            }

            @Override
            public void onFailure(Call<Cardapio> call, Throwable t) {

            }
        });

    }

    private  void atualizarCardapio(){
        Cardapio cardapio = new Cardapio("Churrasco", "imagem");
        Call<Cardapio> call = service.atualizarCardapio(1, cardapio);

        call.enqueue(new Callback<Cardapio>() {
            @Override
            public void onResponse(Call<Cardapio> call, Response<Cardapio> response) {
                if (response.isSuccessful()){

                }
            }

            @Override
            public void onFailure(Call<Cardapio> call, Throwable t) {

            }
        });
    }

    private void removerCardapio(){

        Call<Void> call = service.removerCardapio(1);
        call.enqueue(new Callback<Void>() {
            @Override
            public void onResponse(Call<Void> call, Response<Void> response) {
                if (response.isSuccessful()){
                    Toast.makeText(CardapioActivity.this, "Removido com sucesso!", Toast.LENGTH_SHORT).show();
                }
            }

            @Override
            public void onFailure(Call<Void> call, Throwable t) {

            }
        });
    }

}