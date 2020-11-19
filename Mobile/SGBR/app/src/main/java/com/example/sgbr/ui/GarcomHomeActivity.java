package com.example.sgbr.ui;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.ItemTouchHelper;
import androidx.recyclerview.widget.RecyclerView;

import android.os.Bundle;
import android.util.Log;

import com.example.sgbr.R;
import com.example.sgbr.adapter.AdapterCategoriaCardapio;
import com.example.sgbr.adapter.AdapterChamadaCliente;
import com.example.sgbr.adapter.AdapterItensCarrinho;
import com.example.sgbr.adapter.AdapterMesa;
import com.example.sgbr.adapter.AdapterPedido;
import com.example.sgbr.api.Conexao;
import com.example.sgbr.api.DataService;
import com.example.sgbr.model.ItemPedido;
import com.example.sgbr.model.Mesa;
import com.example.sgbr.model.Pedido;

import java.util.ArrayList;
import java.util.Collections;
import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class GarcomHomeActivity extends AppCompatActivity {

    private Conexao conexao = new Conexao();
    private RecyclerView recyclerView;
    private RecyclerView recyclerView2;
    private AdapterMesa adapterMesa;
    private AdapterChamadaCliente adapterChamadaCliente;
    private List<ItemPedido> listaItensPedidos = new ArrayList<>();
    private List<Mesa> listaMesas = new ArrayList<>();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_garcom_home);

        recyclerView = findViewById(R.id.recyclerview_pedido);
        recyclerView2 = findViewById(R.id.recyclerview_chamada_cliente);


        recuperarPedido();
        //recuperarMesas();
    }

    public void recuperarPedido() {

        DataService service = conexao.conexao().create(DataService.class);
        Call<List<ItemPedido>> call = service.recuperarTodosItemPedido();

        call.enqueue(new Callback<List<ItemPedido>>() {
            @Override
            public void onResponse(Call<List<ItemPedido>> call, Response<List<ItemPedido>> response) {
                if (response.isSuccessful() && response.body() != null){

                    Log.d("Resultado", "Aqui tem informação");
                    listaItensPedidos = response.body();

                        adapterMesa = new AdapterMesa(listaItensPedidos, GarcomHomeActivity.this);
                        recyclerView.setAdapter(adapterMesa);
                        recyclerView.scrollToPosition(0);

                    ItemTouchHelper helper = new ItemTouchHelper(
                            new ItemTouchHandler(0,
                                    ItemTouchHelper.LEFT)
                    );

                    helper.attachToRecyclerView(recyclerView);
                }
            }

            @Override
            public void onFailure(Call<List<ItemPedido>> call, Throwable t) {

            }
        });
    }

    private class ItemTouchHandler extends ItemTouchHelper.SimpleCallback {

        public ItemTouchHandler(int dragDirs, int swipeDirs) {
            super(dragDirs, swipeDirs);
        }

        @Override
        public boolean onMove(@NonNull RecyclerView recyclerView, @NonNull RecyclerView.ViewHolder viewHolder, @NonNull RecyclerView.ViewHolder target) {
            int from = viewHolder.getAdapterPosition();
            int to = target.getAdapterPosition();

            Collections.swap(adapterMesa.getListaItensPedidos(), from, to);
            adapterMesa.notifyItemMoved(from, to);

            return true;
        }

        @Override
        public void onSwiped(@NonNull RecyclerView.ViewHolder viewHolder, int direction) {
            adapterMesa.getListaItensPedidos().remove(viewHolder.getAdapterPosition());
            adapterMesa.notifyItemRemoved(viewHolder.getAdapterPosition());
        }
    }

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