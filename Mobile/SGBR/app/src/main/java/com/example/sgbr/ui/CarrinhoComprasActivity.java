package com.example.sgbr.ui;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.TextView;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.DividerItemDecoration;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import com.example.sgbr.R;
import com.example.sgbr.adapter.AdapterItensCarrinho;
import com.example.sgbr.api.Conexao;
import com.example.sgbr.api.DataService;
import com.example.sgbr.model.ItemPedido;
import com.example.sgbr.model.Pedido;

import java.util.ArrayList;
import java.util.List;
import java.util.Timer;
import java.util.TimerTask;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

import static com.example.sgbr.ui.CategoriaCardapioActivity.valor;

public class CarrinhoComprasActivity extends AppCompatActivity {

    private Conexao conexao = new Conexao();
    private RecyclerView recyclerView;
    private AdapterItensCarrinho adapterItensCarrinho;
    private List<ItemPedido> listaItensPedido = new ArrayList<>();
    private List<Pedido> listaPedido = new ArrayList<>();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_carrinho_compras);

        recyclerView = findViewById(R.id.recyclerciew_carrinho_compras);

        recyclerView.setLayoutManager(new LinearLayoutManager(this));
        recyclerView.setHasFixedSize(true);
        recyclerView.addItemDecoration(new DividerItemDecoration(this, LinearLayout.VERTICAL));

        recuperarItensPedidos();
    }

    @Override
    public void onBackPressed() {
        Intent intent = new Intent(CarrinhoComprasActivity.this, CategoriaCardapioActivity.class);
        intent.putExtra("key", valor);
        startActivity(intent);
    }

    public void recuperarItensPedidos() {

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

                                listaItensPedido = response.body();
                                for (int i=0; i < listaItensPedido.size(); i++){
                                    listaItensPedido.get(i);

                                    adapterItensCarrinho = new AdapterItensCarrinho(listaItensPedido, CarrinhoComprasActivity.this);
                                    recyclerView.setAdapter(adapterItensCarrinho);
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

    public void apagarItensPedidos(View v) {

        DataService service = conexao.conexao().create(DataService.class);
        Call<List<Pedido>> callPedido = service.recuperarPedido();

        callPedido.enqueue(new Callback<List<Pedido>>() {
            @Override
            public void onResponse(Call<List<Pedido>> call, Response<List<Pedido>> response) {
                if (response.isSuccessful()) {
                    listaPedido = response.body();
                    Pedido pedido = listaPedido.get(listaPedido.size() - 1);

                    DataService service = conexao.conexao().create(DataService.class);
                    Call<List<ItemPedido>> callItemPedido = service.recuperarItemPedido(pedido.getCod_Pedido());

                    callItemPedido.enqueue(new Callback<List<ItemPedido>>() {
                                               @Override
                                               public void onResponse(Call<List<ItemPedido>> call, Response<List<ItemPedido>> response) {
                                                   if (response.isSuccessful()) {
                                                       listaItensPedido = response.body();
                                                       ItemPedido itemPedido = listaItensPedido.get(listaItensPedido.size() -1);

                                                       DataService service = conexao.conexao().create(DataService.class);
                                                       Call<Void> callItemPedido = service.removerItemPedido(itemPedido.getCod_Pedido(),itemPedido.getCod_Item());

                                                       callItemPedido.enqueue(new Callback<Void>() {
                                                           @Override
                                                           public void onResponse(Call<Void> call, Response<Void> response) {
                                                               Log.d("Resultado", "Apagou porra");
                                                               Intent it = new Intent(CarrinhoComprasActivity.this, CarrinhoComprasActivity.class);
                                                               startActivity(it);
                                                           }

                                                           @Override
                                                           public void onFailure(Call<Void> call, Throwable t) {

                                                           }
                                                       });
                                                   }
                                               }
                                               @Override public void onFailure(Call<List<ItemPedido>> call, Throwable t) {

                                               }
                    });
                }
            }

            @Override
            public void onFailure(Call<List<Pedido>> call, Throwable t) {

            }
        });
    }

    public void telaItens(View v) {
        Bundle bundle = getIntent().getExtras();
        String valor = bundle.getString("key");
        Intent it = new Intent(CarrinhoComprasActivity.this, CategoriaCardapioActivity.class);
        it.putExtra("key", valor);
        startActivity(it);
    }

    public void telaPagamento(View v) {

        Bundle extras = getIntent().getExtras();
        String qrcode = extras.getString("qrcode");
        Intent it = new Intent(CarrinhoComprasActivity.this, PagamentoActivity.class);
        it.putExtra("qrcode", qrcode);
        startActivity(it);
    }
}