package com.example.sgbr.ui;

import android.app.Activity;
import android.content.Intent;
import android.graphics.Typeface;
import android.os.Bundle;
import android.provider.ContactsContract;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.RecyclerView;

import com.example.sgbr.R;
import com.example.sgbr.adapter.AdapterItensCardapio;
import com.example.sgbr.adapter.AdapterMesa;
import com.example.sgbr.adapter.AdapterPagamento;
import com.example.sgbr.api.Conexao;
import com.example.sgbr.api.DataService;
import com.example.sgbr.model.Cardapio;
import com.example.sgbr.model.ItemPedido;
import com.example.sgbr.model.Mesa;
import com.example.sgbr.model.Pedido;
import com.google.zxing.integration.android.IntentIntegrator;
import com.google.zxing.integration.android.IntentResult;

import java.util.ArrayList;
import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;


public class MainActivity extends AppCompatActivity {

    private Conexao conexao = new Conexao();
    private RecyclerView recyclerView;
    private List<Pedido> listaPedido = new ArrayList<>();
    private Pedido post;
    private AdapterMesa adapterMesa;
    private List<Mesa> listaMesas = new ArrayList<>();
    private String codQrCode;
    private int ultimo;
    private String Pegarqrcode;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        //Atribuição de id

        TextView main_text_Titulo = findViewById(R.id.Main_text_Titulo);
        TextView main_text_Subtitulo = findViewById(R.id.Main_text_Subtitulo);
        TextView main_text_Texto1 = findViewById(R.id.Main_text_Texto1);
        TextView main_text_Texto2 = findViewById(R.id.Main_text_Texto2);
        TextView main_text_Texto3 = findViewById(R.id.Main_text_Texto3);
        TextView main_text_Link = findViewById(R.id.Main_text_Link);

        EditText main_editText_Codigo = findViewById(R.id.Main_editText_Codigo);


        Button main_btn_Escanear = (Button) findViewById(R.id.Main_btn_Escanear);
        Button main_btn_ConfirmarCodigo = (Button) findViewById(R.id.Main_btn_ConfirmarCodigo);


        //Definição de Fontes:

        Typeface font = Typeface.createFromAsset(getAssets(), "Poppins-Regular.ttf");
        main_text_Titulo.setTypeface(font);
        main_text_Subtitulo.setTypeface(font);
        main_text_Texto1.setTypeface(font);
        main_text_Texto2.setTypeface(font);
        main_text_Texto3.setTypeface(font);
        main_text_Link.setTypeface(font);
        main_btn_Escanear.setTypeface(font);
        main_btn_ConfirmarCodigo.setTypeface(font);
        final Activity activity = this;

        main_btn_Escanear.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                IntentIntegrator integrator = new IntentIntegrator(activity);
                integrator.setDesiredBarcodeFormats(IntentIntegrator.QR_CODE_TYPES);
                integrator.setPrompt("Scaneie o QrCode que está em sua mesa");
                integrator.setCameraId(0);
                integrator.setBeepEnabled(false);
                integrator.setBarcodeImageEnabled(true);
                integrator.initiateScan();
            }
        });


    }

    private String numeroQrCode(int requestCode, int resultCode, @Nullable Intent data){
        IntentResult result = IntentIntegrator.parseActivityResult(requestCode, resultCode, data);
        String codQrcode = result.getContents().toString();
        return codQrcode;
    }

    @Override
    protected void onActivityResult(int requestCode, int resultCode, @Nullable Intent data) {
        IntentResult result = IntentIntegrator.parseActivityResult(requestCode, resultCode, data);

        if (result != null) {
            if (result.getContents() != null) {
                Pegarqrcode = result.getContents();
                Log.d("Resultado", "Resultado do scan: "+ result.getContents());
                inserirPedido();
                alert("Scan realizado com sucesso!");
                    Intent intent = new Intent(MainActivity.this, CardapioActivity.class);
                    /*intent.putExtra("cod_pedido", post.getCod_Pedido()); erro*/
                    startActivity(intent);
            } else {
                alert("Scan Cancelado");
            }
        } else {
            super.onActivityResult(requestCode, resultCode, data);
        }
    }

    private void alert(String msg) {
        Toast.makeText(getApplicationContext(), msg, Toast.LENGTH_LONG).show();
    }

    private void inserirPedido(){

        DataService service = conexao.conexao().create(DataService.class);
        Pedido pedido = new Pedido("", Pegarqrcode);
        Call<Pedido> call = service.inserirPedido(pedido);

        call.enqueue(new Callback<Pedido>() {
            @Override
            public void onResponse(retrofit2.Call<Pedido> call, Response<Pedido> response) {
                if (response.isSuccessful()){

                    /*DataService service = conexao.conexao().create(DataService.class);
                    Call<List<Pedido>> call1 = service.recuperarPedido();
                    call1.enqueue(new Callback<List<Pedido>>() {
                        @Override
                        public void onResponse(Call<List<Pedido>> call, Response<List<Pedido>> response) {
                            listaPedido = response.body();
                            for(int i=0; i < listaPedido.size(); i++){

                                Pedido post = listaPedido.get(listaPedido.size() -1);
                                Log.d("Resultado", "Resultado: "+ post.getCod_Pedido());

                            }
                        }

                        @Override
                        public void onFailure(Call<List<Pedido>> call, Throwable t) {

                        }
                    });*/
                }
            }

            @Override
            public void onFailure(retrofit2.Call<Pedido> call, Throwable t) {

            }
        });
    }

    ////////////////////////----Métodos para testes----/////////////////////////////

    public void testeTelas(View v) {

        Intent it = new Intent(MainActivity.this, CardapioActivity.class);
                     startActivity(it);
    }

    public void testeTelasCarrinho(View v) {

        Intent it = new Intent(MainActivity.this, LoginActivity.class);
        startActivity(it);
    }
}