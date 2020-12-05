package com.example.sgbr.adapter;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import com.bumptech.glide.Glide;
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
        holder.valor_quantidade.setText(itemPedido.getQuantidade()+"x");
        holder.txt_quantidade.setText("Quantidade:");
        holder.detalhes.setText("...");
        holder.txt_total.setText("Total:");

        resultado = Double.parseDouble(itemPedido.getPreco()) * Double.parseDouble(itemPedido.getQuantidade()) / Double.parseDouble(itemPedido.getQuantidade());

        holder.valor_totalItem.setText(resultado.toString()+"0");

        Glide.with(context)
                .load("http://192.168.1.100:80/Grupo2_TTC_ETEC/Web/ProjetoTCC/assets/img/itens/"+itemPedido.getFoto_Item())
                .centerCrop()
                .into(holder.img_item);


    }

    @Override
    public int getItemCount() {
        return listaItensPedido.size();
    }

    public class PagamentoViewHolder extends RecyclerView.ViewHolder{

        TextView nome_item;
        TextView descricao;
        TextView txt_quantidade;
        TextView valor_quantidade;
        TextView valor_totalItem;
        TextView txt_total;
        TextView detalhes;
        ImageView img_item;

        public PagamentoViewHolder(@NonNull View PagamentoView) {

            super(PagamentoView);

            nome_item = PagamentoView.findViewById(R.id.txt_titulo);
            descricao = PagamentoView.findViewById(R.id.txt_descricao);
            txt_quantidade = PagamentoView.findViewById(R.id.txt_quantidade);
            valor_quantidade = PagamentoView.findViewById(R.id.txt_valor_quantidade);
            txt_total = PagamentoView.findViewById(R.id.txt_total);
            valor_totalItem = PagamentoView.findViewById(R.id.txt_valor_total);
            detalhes = PagamentoView.findViewById(R.id.txt_detalhes);
            img_item = PagamentoView.findViewById(R.id.txt_img);
        }
    }
}
