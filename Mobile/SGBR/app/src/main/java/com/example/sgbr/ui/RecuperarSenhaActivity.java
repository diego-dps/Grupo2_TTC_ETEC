package com.example.sgbr.ui;

import androidx.appcompat.app.AppCompatActivity;

import android.graphics.Typeface;
import android.os.Bundle;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import com.example.sgbr.R;

public class RecuperarSenhaActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_recuperar_senha);

        //Atribuição de id

        TextView recuperarSenha_text_Titulo = (TextView) findViewById(R.id.RecuperarSenha_text_Titulo);
        TextView recuperarSenha_text_Email= (TextView) findViewById(R.id.RecuperarSenha_text_Email);
        TextView recuperarSenha_text_Texto1 = (TextView) findViewById(R.id.RecuperarSenha_text_Texto1);

        EditText recuperarSenha_editText_Email = (EditText) findViewById(R.id.RecuperarSenha_editText_Email);

        Button recuperarSenha_btn = (Button) findViewById(R.id.RecuperarSenha_btn);

        //Definição de Fontes:

        Typeface font = Typeface.createFromAsset(getAssets(), "Poppins-Regular.ttf");
        recuperarSenha_text_Titulo.setTypeface(font);
        recuperarSenha_text_Email.setTypeface(font);
        recuperarSenha_text_Texto1.setTypeface(font);
        recuperarSenha_btn.setTypeface(font);
    }
}