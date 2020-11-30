package com.example.sgbr.ui;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.EditText;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.RecyclerView;

import com.example.sgbr.R;
import com.example.sgbr.api.Conexao;
import com.example.sgbr.api.DataService;
import com.example.sgbr.model.ItemPedido;
import com.example.sgbr.model.Observacao;
import com.example.sgbr.model.Pedido;

import java.util.ArrayList;
import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class ObservacaoActivity extends AppCompatActivity {

    private EditText observacao;
    private String ob;
    private Conexao conexao = new Conexao();
    private RecyclerView recyclerView;
    private List<ItemPedido> listaItensPedido = new ArrayList<>();
    private List<Pedido> listaPedido = new ArrayList<>();
    private List<Observacao> listaObservacao = new ArrayList<>();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_observacao);

    }

    public void adcionarObservacao(View v){

        this.observacao = (EditText) findViewById(R.id.observacao);
        ob = this.observacao.getText().toString();
        Log.d("Resultado: ", "Aqui tem informação da observação " + ob);


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
                                                   if (response.isSuccessful()){
                                                       listaItensPedido = response.body();
                                                       ItemPedido itemPedido = listaItensPedido.get(listaItensPedido.size() -1);

                                                       DataService service = conexao.conexao().create(DataService.class);
                                                       Observacao observacao = new Observacao(pedido.getCod_Pedido(), itemPedido.getCod_Item(), ob);
                                                       Call<Observacao> callObervacao = service.atualizarItemPedido(observacao);

                                                       callObervacao.enqueue(new Callback<Observacao>() {
                                                           @Override
                                                           public void onResponse(Call<Observacao> call, Response<Observacao> response) {

                                                               Intent it = new Intent(ObservacaoActivity.this, CarrinhoComprasActivity.class);
                                                               startActivity(it);
                                                           }

                                                           @Override
                                                           public void onFailure(Call<Observacao> call, Throwable t) {

                                                           }
                                                       });
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

    public void VoltarTelaCarrinho(View v) {

        Intent it = new Intent(ObservacaoActivity.this, CarrinhoComprasActivity.class);
        startActivity(it);
    }
}