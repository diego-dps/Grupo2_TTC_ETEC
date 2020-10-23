package com.example.sgbr.controller;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.ImageView;
import android.widget.TextView;


import com.example.sgbr.R;


public class CardapioAdapter extends BaseAdapter{
    private String[] titulos;
    private int[] imagens;
    private Context context;
    private LayoutInflater inflater;

    public CardapioAdapter(String[] titulos, int[] imagens, Context context) {
        this.titulos = titulos;
        this.imagens = imagens;
        this.context = context;
        this.inflater = (LayoutInflater) context.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
    }

    @Override
    public int getCount() {
        return imagens.length;
    }

    @Override
    public Object getItem(int position) {
        return null;
    }

    @Override
    public long getItemId(int position) {
        return 0;
    }

    @Override
    public View getView(int position, View convertView, ViewGroup parent) {

        if (convertView == null){
            convertView = inflater.inflate(R.layout.cardapio_cliente, parent, false);
        }

        TextView tv = convertView.findViewById(R.id.titulo_categoria);
        ImageView iv = convertView.findViewById(R.id.img_categoria);

        tv.setText(titulos[position]);
        iv.setImageResource(imagens[position]);


        return convertView;
    }
}

