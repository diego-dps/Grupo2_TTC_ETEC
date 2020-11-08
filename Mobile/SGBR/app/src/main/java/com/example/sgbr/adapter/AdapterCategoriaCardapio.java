package com.example.sgbr.adapter;

import android.app.Activity;
import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.BaseAdapter;
import android.widget.ImageView;
import android.widget.TextView;


import androidx.annotation.NonNull;
import androidx.annotation.Nullable;

import com.example.sgbr.R;
import com.example.sgbr.model.Cardapio;

import java.util.List;


public class AdapterCategoriaCardapio extends BaseAdapter {

    private List<Cardapio> listaCardapio;
    private Context context;

    public AdapterCategoriaCardapio(List<Cardapio> listaCardapio, Context context) {
        this.listaCardapio = listaCardapio;
        this.context = context;
    }

    @Override
    public int getCount() {
        return listaCardapio.size();
    }

    @Override
    public Object getItem(int position) {
        return null;
    }

    @Override
    public long getItemId(int position) {
        return position;
    }

    @Override
    public View getView(int position, View convertView, ViewGroup parent) {

        View view = LayoutInflater.from(context).inflate(R.layout.cardapio_cliente, null);

        TextView categoria_Cardapio = view.findViewById(R.id.titulo_categoria);

        categoria_Cardapio.setText(listaCardapio.get(position).getCategoria_Cardapio());

        return view;
    }
}

