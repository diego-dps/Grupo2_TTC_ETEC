package com.example.sgbr.ui;

import androidx.appcompat.app.AppCompatActivity;

import android.graphics.Typeface;
import android.os.Bundle;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import com.example.sgbr.R;

public class LoginActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        //Atribuição de id

        TextView login_text_Titulo = (TextView) findViewById(R.id.Login_text_Titulo);
        TextView login_text_Usuario= (TextView) findViewById(R.id.Login_text_Usuario);
        TextView login_text_Senha = (TextView) findViewById(R.id.Login_text_Senha);

        EditText login_editText_Usuario = (EditText) findViewById(R.id.Login_editText_Usuario);
        EditText login_editText_Senha = (EditText) findViewById(R.id.Login_editText_Senha);

        Button login_btn = (Button) findViewById(R.id.Login_btn);

        //Definição de Fontes:

        Typeface font = Typeface.createFromAsset(getAssets(), "Poppins-Regular.ttf");
        login_text_Titulo.setTypeface(font);
        login_text_Usuario.setTypeface(font);
        login_text_Senha.setTypeface(font);
        login_btn.setTypeface(font);
    }
}