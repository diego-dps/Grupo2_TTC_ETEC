package com.example.sgbr.ui;

import android.os.Bundle;
import android.util.Log;
import android.widget.LinearLayout;
import android.widget.TextView;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.DividerItemDecoration;
import androidx.recyclerview.widget.LinearLayoutManager;
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
    private Double valor_totalItem;
    private Double valor_totalItem1;
    private TextView total;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_pagamento);

        total = findViewById(R.id.preco_Final_Valor);

        recyclerView = findViewById(R.id.recycler_view_pagamento);

        //Configura o RecycleView
        recyclerView.setLayoutManager(new LinearLayoutManager(this));
        recyclerView.setHasFixedSize(true);
        recyclerView.addItemDecoration(new DividerItemDecoration(this, LinearLayout.VERTICAL));

        recuperarItensPedidos();
    }


    private void recuperarItensPedidos() {

                    DataService service = conexao.conexao().create(DataService.class);
                    Call<List<ItemPedido>> call = service.recuperarItemPedido("1");

                    call.enqueue(new Callback<List<ItemPedido>>() {
                        @Override
                        public void onResponse(Call<List<ItemPedido>> call, Response<List<ItemPedido>> response) {
                            if (response.isSuccessful() && response != null) {
                                Log.d("Resultado", "Aqui tem informação");
                                listaItensPedido = response.body();
                                Double resultado = 0.0;
                                for (int i = 0; i < listaItensPedido.size(); i++) {

                                    resultado = Double.parseDouble(listaItensPedido.get(i).getPreco());
                                    adapterPagamento = new AdapterPagamento(listaItensPedido, PagamentoActivity.this);
                                    recyclerView.setAdapter(adapterPagamento);

                                    //valor_totalItem = Double.parseDouble(listaItensPedido.get(i).getPreco()) * Double.parseDouble(listaItensPedido.get(i).getQuantidade());
                                    //valor_totalItem1 = Double.parseDouble(itemPedido1.getPreco()) * Double.parseDouble(itemPedido1.getQuantidade());
                                    resultado = valor_totalItem;
                                    total.setText(resultado.toString());
                                }

                            }
                        }

                        @Override
                        public void onFailure(Call<List<ItemPedido>> call, Throwable t) {

                        }
                    });
                }

}