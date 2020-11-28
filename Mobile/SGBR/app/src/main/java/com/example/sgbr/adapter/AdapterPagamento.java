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
    private Double quantidade;
    private Float v;
    private Double q;
    private Item item;

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
                holder.txt_titulo.setText(itemPedido.getnome_Item());
                if (itemPedido.getobservacao_Pedido() != null){

                    holder.txt_descricao.setText("Sem observação");
                }
                else{

                    holder.txt_descricao.setText(itemPedido.getobservacao_Pedido());
                }
                holder.txt_total.setText("Total: ");
                holder.txt_quantidade.setText("Quantidade:");
                holder.txt_detalhes.setText("...");
                holder.txt_valor_quantidade.setText(itemPedido.getQuantidade());
                holder.txt_valor.setText(itemPedido.getPreco());
                Glide.with(context)
                        .load("http://192.168.0.14:80/Grupo2_TTC_ETEC/Web/ProjetoTCC/assets/img/itens/"+itemPedido.getFoto_Item())
                        .centerCrop()
                        .into(holder.txt_img);
    }

    @Override
    public int getItemCount() {
        return listaItensPedido.size();
    }

    public class PagamentoViewHolder extends RecyclerView.ViewHolder{

        ImageView txt_img;
        TextView txt_titulo;
        TextView txt_descricao;
        TextView txt_total;
        TextView txt_valor;
        TextView txt_quantidade;
        TextView txt_valor_quantidade;
        TextView txt_detalhes;

        public PagamentoViewHolder(@NonNull View PagamentoView) {

            super(PagamentoView);

            txt_img = PagamentoView.findViewById(R.id.txt_img);
            txt_titulo = PagamentoView.findViewById(R.id.txt_titulo);
            txt_descricao = PagamentoView.findViewById(R.id.txt_descricao);
            txt_total = PagamentoView.findViewById(R.id.txt_total);
            txt_valor = PagamentoView.findViewById(R.id.txt_valor);
            txt_quantidade = PagamentoView.findViewById(R.id.txt_quantidade);
            txt_valor_quantidade = PagamentoView.findViewById(R.id.txt_valor_quantidade);
            txt_detalhes = PagamentoView.findViewById(R.id.txt_detalhes);
        }
    }
}
