package com.example.sgbr.ui;

import androidx.appcompat.app.AppCompatActivity;

import android.graphics.Typeface;
import android.os.Bundle;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import com.example.sgbr.R;

public class AlterarSenhaActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_alterar_senha);

        //Atribuição de id

        TextView alterarSenha_text_Titulo = (TextView) findViewById(R.id.AlterarSenha_text_Titulo);
        TextView alterarSenha_text_Nova = (TextView) findViewById(R.id.AlterarSenha_text_Nova);
        TextView alterarSenha_text_ConfirmarNova = (TextView) findViewById(R.id.AlterarSenha_text_ConfirmarNova);

        EditText alterarSenha_editText_Nova = (EditText) findViewById(R.id.AlterarSenha_editText_Nova);
        EditText alterarSenha_editText_ConfirmarNova = (EditText) findViewById(R.id.AlterarSenha_editText_ConfirmarNova);

        Button alterarSenha_btn = (Button) findViewById(R.id.AlterarSenha_btn);

        //Definição de Fontes:

        Typeface font = Typeface.createFromAsset(getAssets(), "Poppins-Regular.ttf");
        alterarSenha_text_Titulo.setTypeface(font);
        alterarSenha_text_Nova.setTypeface(font);
        alterarSenha_text_ConfirmarNova.setTypeface(font);
        alterarSenha_btn.setTypeface(font);
    }
}