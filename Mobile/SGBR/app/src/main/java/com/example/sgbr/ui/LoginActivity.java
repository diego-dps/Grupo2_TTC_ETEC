package com.example.sgbr.ui;

import androidx.appcompat.app.AlertDialog;
import androidx.appcompat.app.AppCompatActivity;

import android.content.DialogInterface;
import android.content.Intent;
import android.graphics.Typeface;
import android.os.Bundle;
import android.text.TextUtils;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import com.example.sgbr.R;
import com.example.sgbr.api.Conexao;
import com.example.sgbr.api.DataService;
import com.example.sgbr.model.Funcionario;

import java.util.ArrayList;
import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class LoginActivity extends AppCompatActivity {

    private Conexao conexao;
    private EditText login_editText_Usuario;
    private EditText login_editText_Senha;
    private List<Funcionario> listaFuncionarios = new ArrayList<>();


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        //Atribuição de id

        TextView login_text_Titulo = (TextView) findViewById(R.id.Login_text_Titulo);
        TextView login_text_Usuario= (TextView) findViewById(R.id.Login_text_Usuario);
        TextView login_text_Senha = (TextView) findViewById(R.id.Login_text_Senha);

        login_editText_Usuario = findViewById(R.id.Login_editText_Usuario);
        login_editText_Senha = findViewById(R.id.Login_editText_Senha);

        Button login_btn = (Button) findViewById(R.id.Login_btn);

        //Definição de Fontes:

        Typeface font = Typeface.createFromAsset(getAssets(), "Poppins-Regular.ttf");
        login_text_Titulo.setTypeface(font);
        login_text_Usuario.setTypeface(font);
        login_text_Senha.setTypeface(font);
        login_btn.setTypeface(font);
    }

    public void validarUsuario(View v){
        if (TextUtils.isEmpty(login_editText_Usuario.getText().toString()) && TextUtils.isEmpty(login_editText_Senha.getText().toString())){
            validarUsuarioErro();
        }

        else {
            validarUsuarioSucesso();
        }
    }

    private void validarUsuarioSucesso(){

        AlertDialog.Builder dialog = new AlertDialog.Builder(this, R.style.AlertDialogCustom);

        //Configura o titulo e mensagem do Alert
        dialog.setTitle("Sucesso");
        dialog.setMessage("Login efetuado com sucesso!");

        //Configura o cancelamento do Alert
        dialog.setCancelable(false);

        //Configura o icone do Alert
        dialog.setIcon(R.drawable.ic_baseline_check_circle_24);

        //Configura as ações do Alert
        dialog.setPositiveButton("OK", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialog, int which) {
                Intent it = new Intent(LoginActivity.this, GarcomHomeActivity.class);
                startActivity(it);
            }
        });

        //Cria e exibi o Alert
        dialog.create();
        dialog.show();

    }

    private void validarUsuarioErro(){

        AlertDialog.Builder dialog = new AlertDialog.Builder(this, R.style.AlertDialogCustom);

        //Configura o titulo e mensagem do Alert
        dialog.setTitle("Erro");
        dialog.setMessage("Erro ao preencher campos!");

        //Configura o cancelamento do Alert
        dialog.setCancelable(false);

        //Configura o icone do Alert
        dialog.setIcon(R.drawable.ic_baseline_error_24);

        //Configura as ações do Alert
        dialog.setPositiveButton("OK", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialog, int which) {
                login_editText_Usuario.requestFocus();
            }
        });

        //Cria e exibi o Alert
        dialog.create();
        dialog.show();

    }
}