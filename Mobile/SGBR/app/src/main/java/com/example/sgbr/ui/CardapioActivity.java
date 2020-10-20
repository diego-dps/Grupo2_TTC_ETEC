package com.example.sgbr.ui;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.GridView;
import android.widget.Toast;;

import com.example.sgbr.R;
import com.example.sgbr.controller.CardapioAdapter;

public class CardapioActivity extends AppCompatActivity {

    GridView gridView;

    String[] tituloCategoria = {"Prato do Dia", "Churrasco", "Lanches", "Pizzas", "Vegetariana", "Sobremesas"};

    int[] imagemCategoria = {R.drawable.pratofeito, R.drawable.pratofeito, R.drawable.pratofeito,
            R.drawable.pratofeito, R.drawable.pratofeito, R.drawable.pratofeito
    };


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_cardapio);

        gridView = findViewById(R.id.gridView_cardapio);

        CardapioAdapter adapter = new CardapioAdapter(tituloCategoria, imagemCategoria, this);

        gridView.setAdapter(adapter);

    }

}