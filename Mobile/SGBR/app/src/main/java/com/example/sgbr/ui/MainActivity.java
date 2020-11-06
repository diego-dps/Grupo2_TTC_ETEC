package com.example.sgbr.ui;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.graphics.Typeface;
import android.os.Bundle;
import android.text.TextUtils;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import com.example.sgbr.R;
import com.example.sgbr.model.Mesa;

import java.util.ArrayList;
import java.util.List;

public class MainActivity extends AppCompatActivity {

    private GarcomHomeActivity objCodigo = new GarcomHomeActivity();
    private EditText main_editText_Codigo;
    private List<Mesa> listaMesas = new ArrayList<>();
    private Mesa mesa;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        //Atribuição de id

        TextView main_text_Titulo = (TextView) findViewById(R.id.Main_text_Titulo);
        TextView main_text_Subtitulo = (TextView) findViewById(R.id.Main_text_Subtitulo);
        TextView main_text_Texto1 = (TextView) findViewById(R.id.Main_text_Texto1);
        TextView main_text_Texto2 = (TextView) findViewById(R.id.Main_text_Texto2);
        TextView main_text_Texto3 = (TextView) findViewById(R.id.Main_text_Texto3);
        TextView main_text_Link = (TextView) findViewById(R.id.Main_text_Link);

        EditText main_editText_Codigo = (EditText) findViewById(R.id.Main_editText_Codigo);


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

        main_btn_ConfirmarCodigo.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if (TextUtils.isEmpty(main_editText_Codigo.getText().toString())){
                    main_editText_Codigo.setError("*");
                    main_editText_Codigo.requestFocus();
                }
                else {
                    Intent it = new Intent(MainActivity.this, CategoriaCardapioActivity.class);
                    startActivity(it);
                }
            }
        });


    }

    private void recuperarCodigo(){
        listaMesas = objCodigo.recuperarMesas();
        for (int i=0; i < listaMesas.size(); i++){
            Mesa mesa = listaMesas.get(i);
            Log.d("Resultado: ", "recuperarCodigo: " + mesa.getNumero_Mesa());
        }

    }

}