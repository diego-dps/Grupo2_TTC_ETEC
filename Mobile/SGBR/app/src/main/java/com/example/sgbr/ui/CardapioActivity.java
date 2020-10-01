package com.example.sgbr.ui;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.GridLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.os.Bundle;
import android.widget.Adapter;

import com.example.sgbr.R;
import com.example.sgbr.controller.CardapioAdapter;

import java.util.ArrayList;
import java.util.List;

public class CardapioActivity extends AppCompatActivity {
    RecyclerView dataList;
    List<String> titulos;
    List<Integer> imagens;
    CardapioAdapter adapter;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_cardapio);
        dataList = findViewById(R.id.dataList);

        titulos = new ArrayList<>();
        imagens = new ArrayList<>();

        titulos.add("Pizzas");
        titulos.add("Bebidas");
        titulos.add("Sobremesas");
        titulos.add("Promoções do dia");

        imagens.add(R.mipmap.ic_launcher);
        imagens.add(R.mipmap.ic_launcher);
        imagens.add(R.mipmap.ic_launcher);
        imagens.add(R.mipmap.ic_launcher);

        adapter = new CardapioAdapter(this,titulos,imagens);

        GridLayoutManager gridLayoutManager = new GridLayoutManager(this,2,GridLayoutManager.VERTICAL,false);
        dataList.setLayoutManager(gridLayoutManager);
        dataList.setAdapter(adapter);
    }
}