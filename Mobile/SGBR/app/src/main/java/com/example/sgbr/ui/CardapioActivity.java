package com.example.sgbr.ui;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.util.Log;
import android.widget.GridView;
import android.widget.Toast;;

import com.example.sgbr.R;
import com.example.sgbr.api.DataService;
import com.example.sgbr.adapter.AdapterCategoriaCardapio;
import com.example.sgbr.model.Cardapio;
import com.example.sgbr.api.Conexao;

import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;
import retrofit2.Retrofit;

public class CardapioActivity extends AppCompatActivity {

    private Conexao conexao = new Conexao();
    private  List<Cardapio> listaCardapio;
    private GridView gridView;
    private AdapterCategoriaCardapio adapterCategoriaCardapio;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_cardapio);

        gridView = findViewById(R.id.gridView_cardapio);

        recuperarCardapio();

    }

    private void recuperarCardapio(){

        DataService service = conexao.conexao().create(DataService.class);
        Call<List<Cardapio>> call = service.recuperarCardapio();

        call.enqueue(new Callback<List<Cardapio>>() {
            @Override
            public void onResponse(Call<List<Cardapio>> call, Response<List<Cardapio>> response) {
                if (response.isSuccessful()){
                    listaCardapio = response.body();

                        Log.d("Resultado: ", "Aqui tem informação " + response.code());
                        AdapterCategoriaCardapio adapterCategoriaCardapio = new AdapterCategoriaCardapio(listaCardapio, CardapioActivity.this);
                        gridView.setAdapter(adapterCategoriaCardapio);
                    }
                }

            @Override
            public void onFailure(Call<List<Cardapio>> call, Throwable t) {

            }
        });
    }

    private void inserirCardapio(){

        DataService service = conexao.conexao().create(DataService.class);
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

        DataService service = conexao.conexao().create(DataService.class);
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

        DataService service = conexao.conexao().create(DataService.class);
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