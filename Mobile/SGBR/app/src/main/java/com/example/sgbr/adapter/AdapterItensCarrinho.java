package com.example.sgbr.adapter;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.ImageButton;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import com.example.sgbr.R;
import com.example.sgbr.model.Item;

import java.util.ArrayList;
import java.util.List;
import java.util.zip.Inflater;

public class AdapterItensCarrinho extends RecyclerView.Adapter<AdapterItensCarrinho.CarrinhoViewHolder> {

    private List<Item> listaItens;
    private Context context;

    public AdapterItensCarrinho(List<Item> listaItens, Context context) {
        this.listaItens = listaItens;
        this.context = context;
    }

    @NonNull
    @Override
    public CarrinhoViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        //CONFIGURA O LAYOUT DESEJADO

        View view = LayoutInflater.from(parent.getContext())
                .inflate(R.layout.carrinho_compras, parent, false);

        return new  CarrinhoViewHolder(view);
    }

    @Override
    public void onBindViewHolder(@NonNull CarrinhoViewHolder holder, int position) {
        //CONFIGURA OS ITENS QUE VÃO SER MOSTRADOS NA TELA

        Item item = listaItens.get(position);
        holder.txt_nome_item.setText(item.getNome_Item());
        holder.txt_preview.setText(item.getDescricao_Item());
        holder.txt_moeda2.setText("R$");
        holder.txt_valor.setText(item.getPreco_Item());
    }

    @Override
    public int getItemCount() {
        //QUANTIDADE DE ITENS QUE VÃO SER MOSTRADOS
        return listaItens.size();
    }


    public class  CarrinhoViewHolder extends  RecyclerView.ViewHolder{

        TextView txt_nome_item;
        TextView txt_preview;
        TextView txt_moeda2;
        TextView txt_valor;
        ImageButton img_add;
        ImageButton img_remove;
        ImageView img_item;
        Button btn_remove_item;

        public CarrinhoViewHolder(@NonNull View itemView) {
            super(itemView);

            txt_nome_item = itemView.findViewById(R.id.txt_nome_item);
            txt_preview = itemView.findViewById(R.id.txt_preview);
            txt_moeda2 = itemView.findViewById(R.id.txt_moeda2);
            txt_valor = itemView.findViewById(R.id.txt_valor);
            img_add = itemView.findViewById(R.id.img_add);
            img_remove = itemView.findViewById(R.id.img_remove);
            img_item = itemView.findViewById(R.id.img_item);
            btn_remove_item = itemView.findViewById(R.id.btn_remove_item);

        }
    }
}
