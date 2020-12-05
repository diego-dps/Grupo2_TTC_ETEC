package com.example.sgbr.ui;

import android.app.Activity;
import android.content.DialogInterface;
import android.content.Intent;
import android.graphics.Typeface;
import android.os.Bundle;
import android.text.TextUtils;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import androidx.annotation.Nullable;
import androidx.appcompat.app.AlertDialog;
import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.RecyclerView;

import com.example.sgbr.R;
import com.example.sgbr.adapter.AdapterMesa;
import com.example.sgbr.api.Conexao;
import com.example.sgbr.api.DataService;
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
    private EditText main_editText_Codigo;
    private List<Pedido> listaPedido = new ArrayList<>();
    private Pedido post;
    private AdapterMesa adapterMesa;
    private List<Mesa> listaMesas = new ArrayList<>();
    private String codQrCode;
    private int ultimo;
    private String Pegarqrcode;
    private Toast toast;
    private long lastBackPressTime = 0;
    public static String qrcode;

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

        main_editText_Codigo = findViewById(R.id.Main_editText_Codigo);


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

    int contador = 0;

    @Override
    public void onBackPressed() {
        contador+=1;
        Toast.makeText(this, "Pressione o Botão Voltar novamente para sair do Aplicativo", Toast.LENGTH_LONG).show();
        if (contador>1) {
            super.onBackPressed();
        }
    }

    private String numeroQrCode(int requestCode, int resultCode, @Nullable Intent data){
        IntentResult result = IntentIntegrator.parseActivityResult(requestCode, resultCode, data);
        String codQrcode = result.getContents().toString();
        return codQrcode;
    }


    /*
     *
     * TELA CARDÁPIO PELO QR CODE, COM VALIDAÇÃO
     *
     * */
    @Override
    protected void onActivityResult(int requestCode, int resultCode, @Nullable Intent data) {
        IntentResult result = IntentIntegrator.parseActivityResult(requestCode, resultCode, data);

        if (result != null) {
            if (result.getContents() != null) {
                Pegarqrcode = result.getContents();
                DataService service = conexao.conexao().create(DataService.class);
                Call<List<Mesa>> call = service.recuperarMesa(Pegarqrcode);

                call.enqueue(new Callback<List<Mesa>>() {
                    @Override
                    public void onResponse(Call<List<Mesa>> call, Response<List<Mesa>> response) {
                        if (response.body().toString().equals("[]")){
                            Toast.makeText(MainActivity.this, "QR Code inválido", Toast.LENGTH_SHORT).show();
                        }
                        else {

                            listaMesas = response.body();
                            Mesa mesa = listaMesas.get(0);

                            if (mesa.getQr_Code().equals(Pegarqrcode)){
                                Log.d("Resultado", "Resultado do scan: "+ result.getContents());
                                inserirPedido();
                                alert("Scan realizado com sucesso!");
                                Intent intent = new Intent(MainActivity.this, CardapioActivity.class);
                                startActivity(intent);
                            }
                            else {
                                Toast.makeText(MainActivity.this, "QR Code inválido", Toast.LENGTH_SHORT).show();
                            }

                        }
                    }

                    @Override
                    public void onFailure(Call<List<Mesa>> call, Throwable t) {
                        Toast.makeText(MainActivity.this, "QR Code inválido", Toast.LENGTH_SHORT).show();
                    }
                });

            }
        }
        else {
            super.onActivityResult(requestCode, resultCode, data);
        }
    }

    private void alert(String msg) {
        Toast.makeText(getApplicationContext(), msg, Toast.LENGTH_LONG).show();
    }


    /*
     *
     * INSERIR PEDIDO
     *
     * */
    private void inserirPedido(){

        DataService service = conexao.conexao().create(DataService.class);
        Pedido pedido = new Pedido("", Pegarqrcode);
        Call<Pedido> call = service.inserirPedido(pedido);

        call.enqueue(new Callback<Pedido>() {
            @Override
            public void onResponse(retrofit2.Call<Pedido> call, Response<Pedido> response) {

            }

            @Override
            public void onFailure(retrofit2.Call<Pedido> call, Throwable t) {

            }
        });
    }


    /*
    *
    * TELA CARDÁPIO
    *
    * */
    public void telaCardapio(View v) {
        if (TextUtils.isEmpty(main_editText_Codigo.getText().toString())){
            validarCodigoVazio();
        }
        else {
            DataService service = conexao.conexao().create(DataService.class);
            Call<List<Mesa>> call = service.recuperarMesa(main_editText_Codigo.getText().toString());

            call.enqueue(new Callback<List<Mesa>>() {
                @Override
                public void onResponse(Call<List<Mesa>> call, Response<List<Mesa>> response) {
                    if (response.body().toString().equals("[]")){
                        validarCodigoErro();
                    }
                    else {
                        listaMesas = response.body();
                        Mesa mesa = listaMesas.get(0);

                        if (mesa.getQr_Code().equals(main_editText_Codigo.getText().toString())){
                            Pegarqrcode = main_editText_Codigo.getText().toString();
                            inserirPedido();
                            Intent it = new Intent(MainActivity.this, CardapioActivity.class);
                            qrcode = mesa.getQr_Code();
                            it.putExtra("qrcode", qrcode);
                            startActivity(it);
                        }
                        else {
                            validarCodigoErro();
                        }

                    }
                }

                @Override
                public void onFailure(Call<List<Mesa>> call, Throwable t) {
                    validarCodigoErro();
                }
            });
        }
    }


    /*
     *
     * TELA LOGIN
     *
     * */
    public void telaLogin(View v) {
        Intent it = new Intent(MainActivity.this, LoginActivity.class);
        startActivity(it);
    }


    /*
     *
     * VÁLIDAÇÃO DO CAMPO CÓDIGO
     *
     * */
    public void validarCodigoVazio(){

        AlertDialog.Builder dialog = new AlertDialog.Builder(this, R.style.AlertDialogCustom);

        //Configura o titulo e mensagem do Alert
        dialog.setTitle("Erro ao preencher campos!");
        dialog.setMessage("Campo Código vazio!");

        //Configura o cancelamento do Alert
        dialog.setCancelable(false);

        //Configura o icone do Alert
        dialog.setIcon(R.drawable.ic_baseline_error_24);

        //Configura as ações do Alert
        dialog.setPositiveButton("OK", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialog, int which) {
                main_editText_Codigo.requestFocus();
            }
        });

        //Cria e exibi o Alert
        dialog.create();
        dialog.show();

    }

    public void validarCodigoErro(){

        AlertDialog.Builder dialog = new AlertDialog.Builder(this, R.style.AlertDialogCustom);

        //Configura o titulo e mensagem do Alert
        dialog.setTitle("Erro ao preencher campos!");
        dialog.setMessage("Código inválido!");

        //Configura o cancelamento do Alert
        dialog.setCancelable(false);

        //Configura o icone do Alert
        dialog.setIcon(R.drawable.ic_baseline_error_24);

        //Configura as ações do Alert
        dialog.setPositiveButton("OK", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialog, int which) {
                main_editText_Codigo.requestFocus();
            }
        });

        //Cria e exibi o Alert
        dialog.create();
        dialog.show();

    }
}