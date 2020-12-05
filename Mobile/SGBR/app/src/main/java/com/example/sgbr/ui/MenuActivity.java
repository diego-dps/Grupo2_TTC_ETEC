package com.example.sgbr.ui;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageView;

import com.example.sgbr.R;
import com.example.sgbr.api.Conexao;
import com.example.sgbr.api.DataService;
import com.example.sgbr.model.Mesa;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

import static com.example.sgbr.ui.CardapioActivity.qrcode;
import static com.example.sgbr.ui.CategoriaCardapioActivity.valor;

public class MenuActivity extends AppCompatActivity {

    private Conexao conexao = new Conexao();
    private ImageView btn_chamarGarcom;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_menu);

        btn_chamarGarcom = findViewById(R.id.btn_chamarGarcom);

        btn_chamarGarcom.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                chamarGarcom();
            }
        });
    }

    @Override
    public void onBackPressed() {

    }

    public void telaCardapio2(View view){
        Intent intent = new Intent(MenuActivity.this, CardapioActivity.class);
        startActivity(intent);
    }

    public void telaInicialApp(View view){
        Intent intent = new Intent(MenuActivity.this, MainActivity.class);
        startActivity(intent);
    }

    public void telaCarrinho2(View view){

        Intent intent = new Intent(MenuActivity.this, CarrinhoComprasActivity.class);
        intent.putExtra("key", valor);
        startActivity(intent);
    }

    private void chamarGarcom(){
        DataService service1 = conexao.conexao().create(DataService.class);
        Mesa mesa = new Mesa("1");
        Call<Mesa> callMesa = service1.atualizarMesa(qrcode, mesa);

        callMesa.enqueue(new Callback<Mesa>() {
            @Override
            public void onResponse(Call<Mesa> call, Response<Mesa> response) {
                if (response.isSuccessful() && response != null) {

                }
            }

            @Override
            public void onFailure(Call<Mesa> call, Throwable t) {

            }
        });
    }
}