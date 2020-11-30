package com.example.sgbr.ui;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.DividerItemDecoration;
import androidx.recyclerview.widget.ItemTouchHelper;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.LinearLayout;

import com.example.sgbr.R;
import com.example.sgbr.adapter.AdapterMesa;
import com.example.sgbr.api.Conexao;
import com.example.sgbr.api.DataService;
import com.example.sgbr.model.ItemPedido;

import java.util.ArrayList;
import java.util.Collections;
import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class GarcomHomeActivity extends AppCompatActivity {

    private Conexao conexao = new Conexao();
    private RecyclerView recyclerView;
    private AdapterMesa adapterMesa;
    private List<ItemPedido> listaItensPedidos = new ArrayList<>();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_garcom_home);

        recyclerView = findViewById(R.id.recyclerview_pedido);

        recyclerView.setLayoutManager(new LinearLayoutManager(this));
        recyclerView.setHasFixedSize(true);
        recyclerView.addItemDecoration(new DividerItemDecoration(this, LinearLayout.VERTICAL));

        recuperarComanda();
    }

    public void recuperarComanda() {

        DataService serviceItemPedido = conexao.conexao().create(DataService.class);
        Call<List<ItemPedido>> callItemPedido = serviceItemPedido.recuperarPedidosConcluidos("Concluido");

        callItemPedido.enqueue(new Callback<List<ItemPedido>>() {
            @Override
            public void onResponse(Call<List<ItemPedido>> call, Response<List<ItemPedido>> response) {
                if (response.isSuccessful() && response != null){
                    listaItensPedidos = response.body();

                    adapterMesa = new AdapterMesa(listaItensPedidos, GarcomHomeActivity.this);
                    recyclerView.setAdapter(adapterMesa);

                }
            }

            @Override
            public void onFailure(Call<List<ItemPedido>> call, Throwable t) {

            }
        });

    }

    public void telaChamadaCliente(View view){
        Intent intent = new Intent(GarcomHomeActivity.this, GarcomChamadaActivity.class);
        startActivity(intent);
    }


}