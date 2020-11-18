package com.example.sgbr.ui;

import androidx.appcompat.app.AlertDialog;
import androidx.appcompat.app.AppCompatActivity;

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

    private Conexao conexao = new Conexao();
    private EditText login_editText_Usuario;
    private EditText login_editText_Senha;
    private String usuario;
    private String senha;
    private Button login_btn;
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

        usuario = login_text_Usuario.getText().toString();
        senha = login_text_Senha.getText().toString();

        login_btn = findViewById(R.id.Login_btn);

        //Definição de Fontes:

        Typeface font = Typeface.createFromAsset(getAssets(), "Poppins-Regular.ttf");
        login_text_Titulo.setTypeface(font);
        login_text_Usuario.setTypeface(font);
        login_text_Senha.setTypeface(font);
        login_btn.setTypeface(font);

        login_btn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                validarUsuario();
            }
        });

    }

    public void validarUsuario(){
        if (TextUtils.isEmpty(login_editText_Usuario.getText().toString())){
            validarUsuarioErroUsuario();
        }
        else{
            if (TextUtils.isEmpty(login_editText_Senha.getText().toString())){
                validarUsuarioErroSenha();
            }
            else {
                DataService service = conexao.conexao().create(DataService.class);
                Call<List<Funcionario>> call = service.recuperarFuncionarios(login_editText_Usuario.getText().toString());

                call.enqueue(new Callback<List<Funcionario>>() {
                    @Override
                    public void onResponse(Call<List<Funcionario>> call, Response<List<Funcionario>> response) {
                        if (response.body().toString().equals("[]")) {
                            validarUsuarioErro();
                        }
                        else {
                            listaFuncionarios = response.body();
                            Funcionario funcionario = listaFuncionarios.get(0);
                            if (funcionario.getEmail_Funcionario().equals(login_editText_Usuario.getText().toString())
                                    && funcionario.getSenha().equals(login_editText_Senha.getText().toString())) {
                                validarUsuarioSucesso();
                            }
                            else {
                                validarUsuarioErro();
                            }
                        }
                    }
                    @Override
                    public void onFailure(Call<List<Funcionario>> call, Throwable t) {
                        validarUsuarioErro();
                    }
                });
            }
        }
    }

    private void validarUsuarioSucesso(){

        AlertDialog.Builder dialog = new AlertDialog.Builder(this, R.style.AlertDialogCustom);

        //Configura o titulo e mensagem do Alert
        dialog.setTitle("Sucesso!");
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

    private void validarUsuarioErroUsuario(){

        AlertDialog.Builder dialog = new AlertDialog.Builder(this, R.style.AlertDialogCustom);

        //Configura o titulo e mensagem do Alert
        dialog.setTitle("Erro ao preencher campos!");
        dialog.setMessage("Campo Usuário vazio!");

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

    private void validarUsuarioErroSenha(){

        AlertDialog.Builder dialog = new AlertDialog.Builder(this, R.style.AlertDialogCustom);

        //Configura o titulo e mensagem do Alert
        dialog.setTitle("Erro ao preencher campos!");
        dialog.setMessage("Campo Senha vazio!");

        //Configura o cancelamento do Alert
        dialog.setCancelable(false);

        //Configura o icone do Alert
        dialog.setIcon(R.drawable.ic_baseline_error_24);

        //Configura as ações do Alert
        dialog.setPositiveButton("OK", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialog, int which) {
                login_editText_Senha.requestFocus();
            }
        });

        //Cria e exibi o Alert
        dialog.create();
        dialog.show();

    }

    private void validarUsuarioErro(){

        AlertDialog.Builder dialog = new AlertDialog.Builder(this, R.style.AlertDialogCustom);

        //Configura o titulo e mensagem do Alert
        dialog.setTitle("Erro ao preencher campos!");
        dialog.setMessage("Usuário ou Senha inválidos!");

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