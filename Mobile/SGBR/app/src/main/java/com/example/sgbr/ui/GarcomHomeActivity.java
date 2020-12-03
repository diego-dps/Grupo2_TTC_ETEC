package com.example.sgbr.ui;

import androidx.appcompat.app.AlertDialog;
import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.DividerItemDecoration;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.app.Dialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.TextView;

import com.example.sgbr.R;
import com.example.sgbr.adapter.AdapterMesa;
import com.example.sgbr.api.Conexao;
import com.example.sgbr.api.DataService;
import com.example.sgbr.model.ItemPedido;

import java.util.ArrayList;
import java.util.Calendar;
import java.util.List;
import java.util.Timer;
import java.util.TimerTask;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class GarcomHomeActivity extends AppCompatActivity {

    private Conexao conexao = new Conexao();
    private RecyclerView recyclerView;
    private AdapterMesa adapterMesa;
    private List<ItemPedido> listaItensPedidos = new ArrayList<>();
    private TextView nome_funcionario;
    private TextView cargo_funcionario;
    private ImageView btn_ajuda;
    private ImageView btn_mais;
    private Dialog dialog_customizado;
    int delay = 3000;
    int intervalo = 3000;
    Timer timer = new Timer();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_garcom_home);

        btn_ajuda = findViewById(R.id.btn_ajudaChamada);

        btn_ajuda.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                ajudar();
            }
        });

        btn_mais = findViewById(R.id.btn_mais);

        btn_mais.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                dialog_customizado = new Dialog(GarcomHomeActivity.this);

                dialog_customizado.show();

                dialog_customizado.setContentView(R.layout.dialog_customizado);

                dialog_customizado.getWindow().setBackgroundDrawableResource(
                        android.R.color.white
                );
            }
        });

        nome_funcionario = findViewById(R.id.nome_funcionario);
        cargo_funcionario = findViewById(R.id.cargo_funcionario);


        iniciarTela();

        recyclerView = findViewById(R.id.recyclerview_pedido);

        recyclerView.setLayoutManager(new LinearLayoutManager(this));
        recyclerView.setHasFixedSize(true);
        recyclerView.addItemDecoration(new DividerItemDecoration(this, LinearLayout.VERTICAL));

        recuperarComanda();

        timer.scheduleAtFixedRate(new TimerTask() {
            @Override
            public void run() {
                recuperarComanda();
            }
        }, delay, intervalo);
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


    private void iniciarTela(){


        Calendar calendar = Calendar.getInstance();

        int horaAtual = calendar.get(Calendar.HOUR_OF_DAY);

        Bundle extras = getIntent().getExtras();
        String nome = extras.getString("nome");
        String cargo = extras.getString("cargo");

        nome_funcionario.setText(nome);
        cargo_funcionario.setText(cargo);

        String dia = "Bom dia ";
        String tarde = "Boa tarde ";
        String noite = "Boa noite ";


            AlertDialog.Builder dialog = new AlertDialog.Builder(this, R.style.AlertDialogCustom);

            if (horaAtual < 12 && horaAtual >= 6) {
                //Configura o titulo e mensagem do Alert
                dialog.setTitle(dia+nome);
                dialog.setMessage("Os clientes estão te esperando! Hora de trabalhar!");
            } else {
                if (horaAtual < 18 && horaAtual >= 12) {
                    //Configura o titulo e mensagem do Alert
                    dialog.setTitle(tarde+nome);
                    dialog.setMessage("Os clientes estão te esperando! Hora de trabalhar!");
                } else {
                    //Configura o titulo e mensagem do Alert
                    dialog.setTitle(noite+nome);
                    dialog.setMessage("Os clientes estão te esperando! Hora de trabalhar!");
                }
            }

            //Configura o cancelamento do Alert
            dialog.setCancelable(false);


            //Configura as ações do Alert
            dialog.setPositiveButton("Começar", new DialogInterface.OnClickListener() {
                @Override
                public void onClick(DialogInterface dialog, int which) {

                }
            });

            //Cria e exibi o Alert
            dialog.create();
            dialog.show();

    }

    private void ajudar(){

        AlertDialog.Builder dialog = new AlertDialog.Builder(this, R.style.AlertDialogCustom);

        //Configura o titulo e mensagem do Alert
        dialog.setTitle("Ajuda!");
        dialog.setMessage("Os pedidos que a cozinha concluir chegaram aqui para que " +
                "você possa saber quando e pra qual mesa entregar a refeição.");


        //Configura o cancelamento do Alert
        dialog.setCancelable(true);


        //Cria e exibi o Alert
        dialog.create();
        dialog.show();
    }

}