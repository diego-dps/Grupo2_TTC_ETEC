package com.example.sgbr.ui;

import androidx.appcompat.app.AlertDialog;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.app.NotificationCompat;
import androidx.recyclerview.widget.DividerItemDecoration;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.app.Dialog;
import android.app.Notification;
import android.app.NotificationManager;
import android.app.PendingIntent;
import android.content.DialogInterface;
import android.content.Intent;
import android.graphics.Bitmap;
import android.graphics.BitmapFactory;
import android.media.Ringtone;
import android.media.RingtoneManager;
import android.net.Uri;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.TextView;
import android.widget.Toast;

import com.example.sgbr.R;
import com.example.sgbr.adapter.AdapterChamadaCliente;
import com.example.sgbr.adapter.AdapterMesa;
import com.example.sgbr.api.Conexao;
import com.example.sgbr.api.DataService;
import com.example.sgbr.model.ItemPedido;
import com.example.sgbr.model.Mesa;

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
    private ImageView btn_sair;
    private Dialog dialog_customizado;
    private List<Mesa> listaMesas = new ArrayList<>();
    private  TextView txt_notificacaoNumero;
    int delay = 3000;
    int intervalo = 3000;
    Timer timer = new Timer();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_garcom_home);

        txt_notificacaoNumero = findViewById(R.id.txt_notificacaonumero);

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

        btn_sair = findViewById(R.id.btn_sair);

        btn_sair.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                sair();
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
        recuperarMesas();

        timer.scheduleAtFixedRate(new TimerTask() {
            @Override
            public void run() {
                recuperarComanda();
            }
        }, delay, intervalo);

        timer.scheduleAtFixedRate(new TimerTask() {
            @Override
            public void run() {
                recuperarMesas();
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

    private void recuperarMesas(){
        DataService service = conexao.conexao().create(DataService.class);
        Call<List<Mesa>> call = service.recuperarMesaChamada("1");

        call.enqueue(new Callback<List<Mesa>>() {
            @Override
            public void onResponse(Call<List<Mesa>> call, Response<List<Mesa>> response) {
                if (response.isSuccessful() && response != null){
                    listaMesas = response.body();

                    int resultado = 0;

                    for (int i = 0; i < listaMesas.size(); i++){
                        resultado += Integer.parseInt(listaMesas.get(i).getChamada_Mesa());

                        if (resultado > 0){
                            txt_notificacaoNumero.setText(String.valueOf(resultado));
                            txt_notificacaoNumero.setVisibility(View.VISIBLE);

                            /*NotificationManager nm = (NotificationManager)getSystemService(NOTIFICATION_SERVICE);
                            PendingIntent p = PendingIntent.getActivity(GarcomHomeActivity.this, 0, new Intent(GarcomHomeActivity.this, GarcomChamadaActivity.class),0);

                            NotificationCompat.Builder builder = new NotificationCompat.Builder(GarcomHomeActivity.this);
                            builder.setTicker("Texto");
                            builder.setContentTitle("Título");
                            builder.setSmallIcon(R.drawable.common_google_signin_btn_text_light_normal_background);
                            builder.setLargeIcon(BitmapFactory.decodeResource(getResources(), R.drawable.coca));
                            builder.setContentIntent(p);

                            NotificationCompat.InboxStyle style = new NotificationCompat.InboxStyle();
                            String[] descs = new String[]{"1","2"};

                            for (int j = 0; j < descs.length; j++){
                                style.addLine(descs[j]);
                            }

                            builder.setStyle(style);

                            Notification n = builder.build();
                            n.vibrate = new long[]{150, 300, 150, 600};
                            n.flags = Notification.FLAG_AUTO_CANCEL;
                            nm.notify(111, n);

                            try {
                                Uri som = RingtoneManager.getDefaultUri(RingtoneManager.TYPE_NOTIFICATION);
                                Ringtone toque = RingtoneManager.getRingtone(GarcomHomeActivity.this, som);
                                toque.play();
                            }

                            catch (Exception e){}*/

                        }
                        if(resultado > 9){
                            txt_notificacaoNumero.setText("9+");
                            txt_notificacaoNumero.setVisibility(View.VISIBLE);
                        }
                    }
                }
            }

            @Override
            public void onFailure(Call<List<Mesa>> call, Throwable t) {

            }
        });
    }

    public void telaChamadaCliente(View view){
        Bundle extras = getIntent().getExtras();
        String nome = extras.getString("nome");
        String cargo = extras.getString("cargo");
        Intent intent = new Intent(GarcomHomeActivity.this, GarcomChamadaActivity.class);
        intent.putExtra("nome", nome);
        intent.putExtra("cargo", cargo);
        startActivity(intent);
    }


    private void iniciarTela(){


        Bundle extras = getIntent().getExtras();
        String nome = extras.getString("nome");
        String cargo = extras.getString("cargo");

        nome_funcionario.setText(nome);
        cargo_funcionario.setText(cargo);


        /*Calendar calendar = Calendar.getInstance();
        int horaAtual = calendar.get(Calendar.HOUR_OF_DAY);

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
            dialog.show();*/

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

    private void sair(){

        AlertDialog.Builder dialog = new AlertDialog.Builder(GarcomHomeActivity.this, R.style.AlertDialogCustom);

        dialog.setTitle("Logout");
        dialog.setMessage("Deseja finalizar sessão?");

        dialog.setPositiveButton("Sim", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialog, int which) {
                Bundle extras = getIntent().getExtras();
                String email = extras.getString("email");
                Intent intent = new Intent(GarcomHomeActivity.this, LoginActivity.class);
                intent.putExtra("email", email);
                startActivity(intent);
            }
        });

        dialog.setNegativeButton("Cancelar", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialog, int which) {

            }
        });

        dialog.setCancelable(false);

        dialog.create();

        dialog.show();
    }

}