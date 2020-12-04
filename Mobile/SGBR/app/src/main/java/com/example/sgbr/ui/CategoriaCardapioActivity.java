package com.example.sgbr.ui;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.LinearLayout;
import android.widget.TextView;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.DividerItemDecoration;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import com.example.sgbr.R;
import com.example.sgbr.adapter.AdapterItensCardapio;
import com.example.sgbr.adapter.AdapterPagamento;
import com.example.sgbr.api.Conexao;
import com.example.sgbr.api.DataService;
import com.example.sgbr.model.Cardapio;
import com.example.sgbr.model.Item;
import com.example.sgbr.model.ItemPedido;
import com.example.sgbr.model.Pedido;

import org.w3c.dom.Text;

import java.util.ArrayList;
import java.util.List;
import java.util.Timer;
import java.util.TimerTask;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class CategoriaCardapioActivity extends AppCompatActivity {

    private Conexao conexao = new Conexao();
    private RecyclerView recyclerView;
    private AdapterItensCardapio adapterItensCardapio;
    private List<Item> listaItens = new ArrayList<>();
    public static String valor;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_categoria_cardapio);

        recyclerView = findViewById(R.id.recyclerciew_categoria_cardapio);


        //Configura o Adapter
        adapterItensCardapio = new AdapterItensCardapio(CategoriaCardapioActivity.this,listaItens);

        //Configura o RecycleView
        recyclerView.setLayoutManager(new LinearLayoutManager(this));
        recyclerView.setHasFixedSize(true);
        recyclerView.addItemDecoration(new DividerItemDecoration(this, LinearLayout.VERTICAL));

        recuperarItens();
    }

    @Override
    public void onBackPressed() {
        Intent intent = new Intent(CategoriaCardapioActivity.this, CardapioActivity.class);
        startActivity(intent);
    }

    public void recuperarItens(){
        Bundle extras = getIntent().getExtras();
        if (extras != null) {
            valor = extras.getString("key");
            DataService service = conexao.conexao().create(DataService.class);
            Call<List<Item>> call = service.recuperarItens(valor);

            call.enqueue(new Callback<List<Item>>() {
                @Override
                public void onResponse(Call<List<Item>> call, Response<List<Item>> response) {
                    if (response.isSuccessful() && response.body() != null) {

                        listaItens = response.body();
                        for (int i = 0; i < listaItens.size(); i++) {
                            listaItens.get(i);

                            adapterItensCardapio = new AdapterItensCardapio(CategoriaCardapioActivity.this, listaItens);
                            recyclerView.setAdapter(adapterItensCardapio);

                        }
                    }

                }

                @Override
                public void onFailure(Call<List<Item>> call, Throwable t) {
                    Log.d("Resultado", "onFailure: Falhou" + t.getMessage());

                }
            });
        }
    }

    public void telaCarrinho(View v) {

        Bundle bundle = getIntent().getExtras();
        String valor = bundle.getString("key");
        Intent it = new Intent(CategoriaCardapioActivity.this, CarrinhoComprasActivity.class);
        it.putExtra("key", valor);
        startActivity(it);
    }

    public void telaCardapio(View v){
        Intent it = new Intent(CategoriaCardapioActivity.this, CardapioActivity.class);
        startActivity(it);
    }
}