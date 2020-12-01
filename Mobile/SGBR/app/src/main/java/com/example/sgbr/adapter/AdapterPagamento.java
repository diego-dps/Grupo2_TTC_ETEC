package com.example.sgbr.adapter;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import com.example.sgbr.R;
import com.example.sgbr.model.Item;
import com.example.sgbr.model.ItemPedido;

import java.util.List;

public class AdapterPagamento extends RecyclerView.Adapter<AdapterPagamento.PagamentoViewHolder>{

    private List<ItemPedido> listaItensPedido;
    private Context context;
    private Double resultado = 0.0;

    public AdapterPagamento(List<ItemPedido> listaItensPedido, Context context) {
        this.listaItensPedido = listaItensPedido;
        this.context = context;
    }


    @NonNull
    @Override
    public PagamentoViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {

        View view = LayoutInflater.from(parent.getContext())
                .inflate(R.layout.pagamento, parent, false);
        return new PagamentoViewHolder(view);
    }

    @Override
    public void onBindViewHolder(@NonNull PagamentoViewHolder holder, int position) {

        ItemPedido itemPedido = listaItensPedido.get(position);
        holder.nome_item.setText(itemPedido.getnome_Item());
        holder.valor_quantidade.setText(itemPedido.getQuantidade());

        resultado = Double.parseDouble(holder.valor_quantidade.getText().toString()) * Double.parseDouble(itemPedido.getPreco());

        holder.valor_totalItem.setText(resultado.toString());


    }

    @Override
    public int getItemCount() {
        return listaItensPedido.size();
    }

    public class PagamentoViewHolder extends RecyclerView.ViewHolder{

        TextView nome_item;
        TextView valor_quantidade;
        TextView valor_totalItem;

        public PagamentoViewHolder(@NonNull View PagamentoView) {

            super(PagamentoView);

            nome_item = PagamentoView.findViewById(R.id.txt_titulo);
            valor_quantidade = PagamentoView.findViewById(R.id.txt_valor_quantidade);
            valor_totalItem = PagamentoView.findViewById(R.id.txt_total);
        }
    }
}
