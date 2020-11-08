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
import androidx.recyclerview.widget.RecyclerView;

import com.example.sgbr.R;
import com.example.sgbr.model.Cardapio;

import java.util.List;


public class AdapterCategoriaCardapio extends RecyclerView.Adapter<AdapterCategoriaCardapio.CategoriaViewHolder> {

    private List<Cardapio> listaCardapio;
    private Context context;

    public AdapterCategoriaCardapio(List<Cardapio> listaCardapio, Context context) {
        this.listaCardapio = listaCardapio;
        this.context = context;
    }

    @NonNull
    @Override
    public CategoriaViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {

        View view = LayoutInflater.from(parent.getContext())
                .inflate(R.layout.cardapio_cliente, parent, false);

        return new CategoriaViewHolder(view);
    }

    @Override
    public void onBindViewHolder(@NonNull CategoriaViewHolder holder, int position) {

        Cardapio cardapio = listaCardapio.get(position);

        holder.txt_nome_categoria.setText(cardapio.getCategoria_Cardapio());

    }

    @Override
    public int getItemCount() {
        return listaCardapio.size();
    }

    public class CategoriaViewHolder extends RecyclerView.ViewHolder{

        ImageView img_categoria;
        TextView txt_nome_categoria;

        public CategoriaViewHolder(@NonNull View itemView) {
            super(itemView);

            img_categoria = itemView.findViewById(R.id.img_categoria);
            txt_nome_categoria = itemView.findViewById(R.id.txt_nome_Categoria);
        }
    }
}