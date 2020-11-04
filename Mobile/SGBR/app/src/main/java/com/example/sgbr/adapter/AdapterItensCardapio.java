package com.example.sgbr.adapter;

import android.app.Activity;
import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Adapter;
import android.widget.Button;
import android.widget.ImageButton;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import com.example.sgbr.R;
import com.example.sgbr.model.Item;

import java.util.List;

public class AdapterItensCardapio extends RecyclerView.Adapter<AdapterItensCardapio.MyViewHolder> {

    private Activity activity;
    private  List<Item> listaItens;

    public  void InserirListaItens(List<Item> listaItens){

    }
    public AdapterItensCardapio(Activity activity, List<Item> listaItens) {
        this.listaItens = listaItens;
        this.activity = activity;
    }

    @NonNull
    @Override
    public MyViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {

        View view = LayoutInflater.from(parent.getContext())
                .inflate(R.layout.categoria_cardapio_item, parent, false);

        return new MyViewHolder(view);
    }

    @Override
    public void onBindViewHolder(@NonNull MyViewHolder holder, int position) {

        Item item = listaItens.get(position);
                holder.txt_nome_item.setText(item.getNome_Item());
                holder.txt_preview.setText(item.getDescricao_Item());
                holder.txt_moeda2.setText("R$");
                holder.txt_valor.setText(item.getPreco_Item());
    }

    @Override
    public int getItemCount() {
        return listaItens.size();
    }

    public class MyViewHolder extends RecyclerView.ViewHolder{


        TextView txt_nome_item;
        TextView txt_preview;
        TextView txt_moeda2;
        TextView txt_valor;
        ImageButton img_add;
        ImageButton img_remove;
        ImageView img_item;
        Button btn_add_item;

        public MyViewHolder(@NonNull View itemView) {
            super(itemView);

            txt_nome_item = itemView.findViewById(R.id.txt_nome_item);
            txt_preview = itemView.findViewById(R.id.txt_preview);
            txt_moeda2 = itemView.findViewById(R.id.txt_moeda2);
            txt_valor = itemView.findViewById(R.id.txt_valor);
            img_add = itemView.findViewById(R.id.img_add);
            img_remove = itemView.findViewById(R.id.img_remove);
            img_item = itemView.findViewById(R.id.img_item);
            btn_add_item = itemView.findViewById(R.id.btn_add_item);

        }
    }
}
