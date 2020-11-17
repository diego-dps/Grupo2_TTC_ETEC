package com.example.sgbr.adapter;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import com.example.sgbr.R;
import com.example.sgbr.model.Item;
import com.example.sgbr.model.Pedido;
import com.google.android.material.button.MaterialButton;

import java.util.List;

public class AdapterPedido extends RecyclerView.Adapter<AdapterPedido.PedidoViewHolder> {

    private List<Pedido> listaPedidos;
    private Context context;
    private  List<Item> listaItens;

    public AdapterPedido(List<Pedido> listaPedidos, Context context) {
        this.listaPedidos = listaPedidos;
        this.context = context;
    }

    @NonNull
    @Override
    public PedidoViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {

        View view = LayoutInflater.from(parent.getContext())
                .inflate(R.layout.garcom_pedido, parent, false);

        return new PedidoViewHolder(view);
    }

    @Override
    public void onBindViewHolder(@NonNull PedidoViewHolder holder, int position) {


    }

    @Override
    public int getItemCount() {
        return listaPedidos.size();
    }

    public class PedidoViewHolder extends RecyclerView.ViewHolder{

        //MaterialButton btn_pedido;

        public PedidoViewHolder(@NonNull View itemView) {
            super(itemView);

            //btn_pedido = itemView.findViewById(R.id.btn_pedido);
        }
    }
}
