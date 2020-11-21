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
import com.example.sgbr.model.Item;
import com.example.sgbr.model.ItemPedido;
import com.example.sgbr.model.Pedido;
import com.example.sgbr.ui.GarcomHomeActivity;

import java.util.List;

public class AdapterMesa extends RecyclerView.Adapter<AdapterMesa.PedidoViewHolder>{

    private Conexao conexao = new Conexao();
    private List<Pedido> listaPedidos;
    private List<ItemPedido> listaItensPedidos;
    private List<Item> listaItens;
    private Context context;
    private GarcomHomeActivity garcomHomeActivity = new GarcomHomeActivity();

    public AdapterMesa(List<ItemPedido> listaItensPedidos, Context context) {
        this.listaItensPedidos = listaItensPedidos;
        this.context = context;
    }

    public List<ItemPedido> getListaItensPedidos(){
        return listaItensPedidos;
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

        ItemPedido itemPedido = listaItensPedidos.get(position);

        holder.cod_Pedido.setText(itemPedido.getCod_Pedido());
        holder.nome_Item.setText(itemPedido.getnome_Item());
        holder.quantidade.setText(itemPedido.getQuantidade());
        holder.observacao.setText(itemPedido.getobservacao_Pedido());


    }

    @Override
    public int getItemCount() {
        return listaItensPedidos.size();
    }

    public class PedidoViewHolder extends RecyclerView.ViewHolder{

        TextView cod_Pedido;
        TextView num_Mesa;
        TextView nome_Item;
        TextView quantidade;
        TextView total;
        TextView observacao;

        public PedidoViewHolder(@NonNull View PedidoView) {

            super(PedidoView);

            cod_Pedido = PedidoView.findViewById(R.id.txt_numPedido);
            num_Mesa = PedidoView.findViewById(R.id.txt_num_mesa);
            nome_Item = PedidoView.findViewById(R.id.txt_itemPedido);
            quantidade = PedidoView.findViewById(R.id.quantidade);
            total = PedidoView.findViewById(R.id.preco_total);
            observacao = PedidoView.findViewById(R.id.observacao);
        }

    }
}