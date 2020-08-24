package com.example.sgbr.ui;

import androidx.appcompat.app.AppCompatActivity;

import android.graphics.Typeface;
import android.os.Bundle;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import com.example.sgbr.R;

public class CodigoRecuperarSenhaActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_codigo_recuperar_senha);

        //Atribuição de id

        TextView codigoRecuperar_Titulo = (TextView) findViewById(R.id.CodigoRecuperar_Titulo);
        TextView codigoRecuperar_text_Codigo = (TextView) findViewById(R.id.CodigoRecuperar_text_Codigo);
        TextView codigoRecuperar_text_Texto1 = (TextView) findViewById(R.id.CodigoRecuperar_text_Texto1);

        EditText codigoRecuperar_editText_Codigo = (EditText) findViewById(R.id.CodigoRecuperar_editText_Codigo);

        Button codigoRecuperar_btn = (Button) findViewById(R.id.CodigoRecuperar_btn);

        //Definição de Fontes:

        Typeface font = Typeface.createFromAsset(getAssets(), "Poppins-Regular.ttf");
        codigoRecuperar_Titulo.setTypeface(font);
        codigoRecuperar_text_Codigo.setTypeface(font);
        codigoRecuperar_text_Texto1.setTypeface(font);
        codigoRecuperar_btn.setTypeface(font);
    }
}