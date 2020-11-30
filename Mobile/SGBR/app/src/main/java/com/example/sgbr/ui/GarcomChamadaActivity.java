package com.example.sgbr.ui;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.DividerItemDecoration;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.os.Bundle;
import android.util.Log;
import android.widget.LinearLayout;

import com.example.sgbr.R;
import com.example.sgbr.adapter.AdapterChamadaCliente;
import com.example.sgbr.api.Conexao;
import com.example.sgbr.api.DataService;
import com.example.sgbr.model.Mesa;

import java.util.ArrayList;
import java.util.List;
import java.util.Timer;
import java.util.TimerTask;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class GarcomChamadaActivity extends AppCompatActivity {

    private Conexao conexao = new Conexao();
    private RecyclerView recyclerView;
    private AdapterChamadaCliente adapterChamadaCliente;
    private List<Mesa> listaMesas = new ArrayList<>();
    int delay = 5000;
    int intervalo = 5000;
    Timer timer = new Timer();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_garcom_chamada);

        recyclerView = findViewById(R.id.recyclerview_chamada);

        recyclerView.setLayoutManager(new LinearLayoutManager(this));
        recyclerView.setHasFixedSize(true);
        recyclerView.addItemDecoration(new DividerItemDecoration(this, LinearLayout.VERTICAL));

        timer.scheduleAtFixedRate(new TimerTask() {
            @Override
            public void run() {
                recuperarMesas();
            }
        }, delay, intervalo);
    }

    private void recuperarMesas(){
        DataService service = conexao.conexao().create(DataService.class);
        Call<List<Mesa>> call = service.recuperarMesaChamada("1");

        call.enqueue(new Callback<List<Mesa>>() {
            @Override
            public void onResponse(Call<List<Mesa>> call, Response<List<Mesa>> response) {
                if (response.isSuccessful() && response != null){
                    listaMesas = response.body();
                    adapterChamadaCliente = new AdapterChamadaCliente(listaMesas, GarcomChamadaActivity.this);
                    recyclerView.setAdapter(adapterChamadaCliente);
                    Log.d("Resposta", "Deu certo: ");
                }
            }

            @Override
            public void onFailure(Call<List<Mesa>> call, Throwable t) {

            }
        });
    }
}