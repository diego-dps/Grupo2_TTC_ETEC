package com.example.sgbr.adapter;

import android.app.Activity;
import android.content.Context;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.BaseAdapter;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;


import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.recyclerview.widget.RecyclerView;

import com.example.sgbr.R;
import com.example.sgbr.api.Conexao;
import com.example.sgbr.api.DataService;
import com.example.sgbr.model.Cardapio;
import com.example.sgbr.model.Item;
import com.example.sgbr.ui.CardapioActivity;
import com.example.sgbr.ui.CategoriaCardapioActivity;

import java.util.ArrayList;
import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;


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