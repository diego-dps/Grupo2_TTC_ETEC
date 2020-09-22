package com.example.sgbr.controller;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import com.example.sgbr.R;

import java.util.List;

public class CardapioAdapter extends RecyclerView.Adapter<CardapioAdapter.ViewHolder> {

    List<String> titulos;
    List<Integer> imagens;
    Context context;
    LayoutInflater inflater;

    public CardapioAdapter(Context context, List<String> titulos, List<Integer> imagens){
        this.titulos = titulos;
        this.imagens = imagens;
        this.inflater = LayoutInflater.from(context);
    }

    @NonNull
    @Override
    public ViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        View view = inflater.inflate(R.layout.activity_cardapio,parent, false);
        return new ViewHolder(view);
    }

    @Override
    public void onBindViewHolder(@NonNull ViewHolder holder, int position) {
        holder.titulo.setText(titulos.get(position));
        holder.imgGrid.setImageResource(imagens.get(position));
    }

    @Override
    public int getItemCount() {
        return titulos.size();
    }

    public class ViewHolder extends RecyclerView.ViewHolder{
        TextView titulo;
        ImageView imgGrid;

        public ViewHolder(@NonNull View itemView) {
            super(itemView);
            titulo = itemView.findViewById(R.id.txt_item_cardapio);
            imgGrid = itemView.findViewById(R.id.img_item_cardapio);
        }
    }
}
