package com.example.sgbr.adapter;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import com.example.sgbr.R;
import com.example.sgbr.api.Conexao;
import com.example.sgbr.model.ItemPedido;

import java.util.ArrayList;
import java.util.List;

public class AdapterPagamento2 extends RecyclerView.Adapter<AdapterPagamento2.PagamentoViewHolder2>{

    private Conexao conexao = new Conexao();
    private List<ItemPedido> listaItensPedido2 = new ArrayList<>();
    private Context context;


    public AdapterPagamento2(List<ItemPedido> listaItensPedido2, Context context){
        this.listaItensPedido2 = listaItensPedido2;
        this.context = context;
    }

    @NonNull
    @Override
    public PagamentoViewHolder2 onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {

        View view = LayoutInflater.from(parent.getContext())
                .inflate(R.layout.activity_pagamento, parent, false);
        return new PagamentoViewHolder2(view);
    }

    @Override
    public void onBindViewHolder(@NonNull PagamentoViewHolder2 holder, int position) {

        ItemPedido itemPedido = listaItensPedido2.get(position);
                holder.preco_Final_Valor.setText(itemPedido.getPreco());
                holder.preco_Final.setText("Preço Total: ");


    }

    @Override
    public int getItemCount() { return listaItensPedido2.size(); }


    public class PagamentoViewHolder2 extends RecyclerView.ViewHolder {

        TextView preco_Final;
        TextView preco_Final_Valor;


        public PagamentoViewHolder2(@NonNull View PagamentoView) {
            super(PagamentoView);

            preco_Final = PagamentoView.findViewById(R.id.preco_Final);
            preco_Final_Valor = PagamentoView.findViewById(R.id.preco_Final_Valor);
        }
    }
}
