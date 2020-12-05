package com.example.sgbr.adapter;

import android.content.Context;
import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import com.bumptech.glide.Glide;
import com.example.sgbr.R;
import com.example.sgbr.api.Conexao;
import com.example.sgbr.api.DataService;
import com.example.sgbr.model.Item;
import com.example.sgbr.model.ItemPedido;
import com.example.sgbr.ui.CarrinhoComprasActivity;
import com.example.sgbr.ui.ObservacaoActivity;

import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

import static com.example.sgbr.ui.CategoriaCardapioActivity.valor;

public class AdapterItensCarrinho extends RecyclerView.Adapter<AdapterItensCarrinho.CarrinhoViewHolder> {

    private Conexao conexao = new Conexao();
    private List<ItemPedido> listaItensPedido;
    private List<Item> listaItens;
    private Context context;
    private CarrinhoComprasActivity carrinhoComprasActivity = new CarrinhoComprasActivity();

    public AdapterItensCarrinho(List<ItemPedido> listaItensPedido, Context context) {
        this.listaItensPedido = listaItensPedido;
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

        ItemPedido itemPedido = listaItensPedido.get(position);
        holder.txt_titulo.setText(itemPedido.getnome_Item());
        holder.txt_descricao.setText(itemPedido.getobservacao_Pedido());
        holder.txt_total.setText("Total: ");
        holder.txt_quantidade.setText("Quantidade:");
        holder.txt_detalhes.setText("...");
        holder.txt_valor_quantidade.setText(itemPedido.getQuantidade());
        holder.txt_valor.setText(itemPedido.getPreco());
        Glide.with(context)
                .load("http://192.168.1.102:80/Grupo2_TTC_ETEC/Web/ProjetoTCC/assets/img/itens/"+itemPedido.getFoto_Item())
                .centerCrop()
                .into(holder.txt_img);

        holder.btn_remove_item.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                DataService service = conexao.conexao().create(DataService.class);
                Call<Void> callItemPedido = service.removerItemPedido(itemPedido.getCod_Pedido(),itemPedido.getCod_Item());
                callItemPedido.enqueue(new Callback<Void>() {
                    @Override
                    public void onResponse(Call<Void> call, Response<Void> response) {

                        Intent intent = new Intent(context, CarrinhoComprasActivity.class);
                        intent.putExtra("key", valor);
                        context.startActivity(intent);
                    }

                    @Override
                    public void onFailure(Call<Void> call, Throwable t) {

                    }
                });
            }
        });
        holder.btn_observação.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                Intent intent = new Intent(context, ObservacaoActivity.class);
                intent.putExtra("key", itemPedido.getCod_Item());
                context.startActivity(intent);

            }
        });

    }

    @Override
    public int getItemCount() {
        //QUANTIDADE DE ITENS QUE VÃO SER MOSTRADOS
        return listaItensPedido.size();
    }


    public class  CarrinhoViewHolder extends  RecyclerView.ViewHolder{

        TextView txt_titulo;
        TextView txt_descricao;
        TextView txt_total;
        TextView txt_valor;
        TextView txt_quantidade;
        TextView txt_valor_quantidade;
        TextView txt_detalhes;
        ImageView txt_img;
        Button btn_remove_item;
        Button btn_observação;

        public CarrinhoViewHolder(@NonNull View itemView) {
            super(itemView);

            txt_img = itemView.findViewById(R.id.txt_img);
            txt_titulo = itemView.findViewById(R.id.txt_titulo);
            txt_descricao = itemView.findViewById(R.id.txt_descricao);
            txt_total = itemView.findViewById(R.id.txt_total);
            txt_valor = itemView.findViewById(R.id.txt_valor);
            txt_quantidade = itemView.findViewById(R.id.txt_quantidade);
            txt_valor_quantidade = itemView.findViewById(R.id.txt_valor_quantidade);
            txt_detalhes = itemView.findViewById(R.id.txt_detalhes);
            btn_remove_item = itemView.findViewById(R.id.btn_remove_item);
            btn_observação = itemView.findViewById(R.id.btn_observação);

        }
    }
}
