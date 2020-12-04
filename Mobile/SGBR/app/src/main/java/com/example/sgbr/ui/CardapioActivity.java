package com.example.sgbr.ui;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.AdapterView;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.DividerItemDecoration;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import com.example.sgbr.R;
import com.example.sgbr.adapter.AdapterCategoriaCardapio;
import com.example.sgbr.api.Conexao;
import com.example.sgbr.api.DataService;
import com.example.sgbr.controller.RecyclerItemClickListener;
import com.example.sgbr.model.Cardapio;
import com.example.sgbr.model.Mesa;
import com.example.sgbr.model.Pedido;

import java.util.ArrayList;
import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

;

public class CardapioActivity extends AppCompatActivity {

    private Conexao conexao = new Conexao();
    private  List<Cardapio> listaCardapio;
    private RecyclerView recyclerView;
    private AdapterCategoriaCardapio adapterCategoriaCardapio;
    private Cardapio cardapio;
    private List<Pedido> listaPedidos = new ArrayList();
    private Button btn_chamarGarcom;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_cardapio);

        recyclerView = findViewById(R.id.recyclerview_cardapio);
        btn_chamarGarcom = findViewById(R.id.btn_chamarGarcom);

        btn_chamarGarcom.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                ChamarGarcom();
            }
        });

        recyclerView.setLayoutManager(new LinearLayoutManager(this));
        recyclerView.setHasFixedSize(true);
        recyclerView.addItemDecoration(new DividerItemDecoration(this, LinearLayout.VERTICAL));

        recuperarCardapio();

    }

    @Override
    public void onBackPressed() {
        Intent intent = new Intent(CardapioActivity.this, MainActivity.class);
        startActivity(intent);
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
                    recyclerView.setAdapter(adapterCategoriaCardapio);

                    //EVENTO CLICK DO RECYCLERVIEW
                    recyclerView.addOnItemTouchListener(
                            new RecyclerItemClickListener(
                                    getApplicationContext(),
                                    recyclerView,
                                    new RecyclerItemClickListener.OnItemClickListener() {
                                        @Override
                                        public void onItemClick(View view, int position) {
                                            cardapio = listaCardapio.get(position);
                                            Intent it = new Intent(CardapioActivity.this, CategoriaCardapioActivity.class);
                                            it.putExtra("key", cardapio.getCod_Cardapio());
                                            startActivity(it);
                                        }

                                        @Override
                                        public void onLongItemClick(View view, int position) {

                                        }

                                        @Override
                                        public void onItemClick(AdapterView<?> parent, View view, int position, long id) {

                                        }
                                    }

                            )
                    );
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

    public void ChamarGarcom() {

        Bundle extras = getIntent().getExtras();
        if (extras != null) {
            String valor = extras.getString("qrcode");
            DataService service1 = conexao.conexao().create(DataService.class);
            Mesa mesa = new Mesa("1");
            Call<Mesa> callMesa = service1.atualizarMesa(valor, mesa);

            callMesa.enqueue(new Callback<Mesa>() {
                @Override
                public void onResponse(Call<Mesa> call, Response<Mesa> response) {
                    if (response.isSuccessful() && response != null) {

                    }
                }

                @Override
                public void onFailure(Call<Mesa> call, Throwable t) {

                }
            });
        }
    }

}