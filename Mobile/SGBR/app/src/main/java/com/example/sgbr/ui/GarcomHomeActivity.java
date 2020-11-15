package com.example.sgbr.ui;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.RecyclerView;

import android.os.Bundle;
import android.util.Log;

import com.example.sgbr.R;
import com.example.sgbr.adapter.AdapterCategoriaCardapio;
import com.example.sgbr.adapter.AdapterChamadaCliente;
import com.example.sgbr.adapter.AdapterItensCarrinho;
import com.example.sgbr.adapter.AdapterPedido;
import com.example.sgbr.api.Conexao;
import com.example.sgbr.api.DataService;
import com.example.sgbr.model.Mesa;
import com.example.sgbr.model.Pedido;

import java.util.ArrayList;
import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class GarcomHomeActivity extends AppCompatActivity {

    private Conexao conexao = new Conexao();
    private RecyclerView recyclerView;
    private RecyclerView recyclerView2;
    private AdapterPedido adapterPedido;
    private AdapterChamadaCliente adapterChamadaCliente;
    private List<Pedido> listaPedidos = new ArrayList<>();
    private List<Mesa> listaMesas = new ArrayList<>();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_garcom_home);

        recyclerView = findViewById(R.id.cardapio_pedido);
        recyclerView2 = findViewById(R.id.cardapio_cliente);



        //recuperarPedido();
        //recuperarMesas();
    }

    /*private void recuperarPedido() {

        DataService service = conexao.conexao().create(DataService.class);
        Call<List<Pedido>> call = service.recuperarPedido();

        call.enqueue(new Callback<List<Pedido>>() {
            @Override
            public void onResponse(Call<List<Pedido>> call, Response<List<Pedido>> response) {
                if (response.isSuccessful() && response.body() != null){

                    Log.d("Resultado", "Aqui tem informação");
                    listaPedidos = response.body();
                    for (int i=0; i < listaPedidos.size(); i++){
                        listaPedidos.get(i);
                        Log.d("Resultado: ", "Aqui tem informação " + response.code());
                        adapterPedido = new AdapterPedido(listaPedidos, GarcomHomeActivity.this);
                        recyclerView.setAdapter(adapterPedido);
                    }
                }
            }

            @Override
            public void onFailure(Call<List<Pedido>> call, Throwable t) {

            }
        });
    }*/

    public List<Mesa> recuperarMesas(){

        DataService service = conexao.conexao().create(DataService.class);
        Call<List<Mesa>> call = service.recuperarMesa("qrcode1");

        call.enqueue(new Callback<List<Mesa>>() {
            @Override
            public void onResponse(Call<List<Mesa>> call, Response<List<Mesa>> response) {
                if (response.isSuccessful() && response.body() != null){

                    Log.d("Resultado", "Aqui tem informação");
                    listaMesas = response.body();
                    for (int i=0; i < listaMesas.size(); i++){
                        listaMesas.get(i);
                        Log.d("Resultado: ", "Aqui tem informação " + response.code());
                        adapterChamadaCliente = new AdapterChamadaCliente(listaMesas, GarcomHomeActivity.this);
                        recyclerView2.setAdapter(adapterChamadaCliente);
                    }
                }

            }

            @Override
            public void onFailure(Call<List<Mesa>> call, Throwable t) {

            }
        });

        return listaMesas;
    }
}