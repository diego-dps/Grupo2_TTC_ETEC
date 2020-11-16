package com.example.sgbr.adapter;

import android.app.Activity;
import android.content.Context;
import android.content.Intent;
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
import com.example.sgbr.api.Conexao;
import com.example.sgbr.api.DataService;
import com.example.sgbr.model.Item;
import com.example.sgbr.model.ItemPedido;
import com.example.sgbr.ui.CarrinhoComprasActivity;
import com.example.sgbr.ui.CategoriaCardapioActivity;
import com.example.sgbr.ui.MainActivity;

import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class AdapterItensCardapio extends RecyclerView.Adapter<AdapterItensCardapio.ItensViewHolder> {

    private Conexao conexao;
    private  List<Item> listaItens;
    private Context context;
    private Double resultado = 0.0;
    private Double quantidade;

    public AdapterItensCardapio(Context context, List<Item> listaItens) {
        this.listaItens = listaItens;
        this.context = context;
    }

    @NonNull
    @Override
    public ItensViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {

        View view = LayoutInflater.from(parent.getContext())
                .inflate(R.layout.categoria_cardapio_item, parent, false);

        return new ItensViewHolder(view);
    }

    @Override
    public void onBindViewHolder(@NonNull ItensViewHolder holder, int position) {

        Item item = listaItens.get(position);
                holder.txt_nome_item.setText(item.getNome_Item());
                holder.txt_preview.setText(item.getDescricao_Item());
                holder.txt_moeda2.setText("R$");
                holder.txt_valor.setText(item.getPreco_Item());

                holder.img_add.setOnClickListener(new View.OnClickListener() {
                    @Override
                    public void onClick(View v) {
                        resultado = Double.parseDouble(item.getPreco_Item()) + Double.parseDouble(holder.txt_valor.getText().toString());
                        holder.txt_valor.setText(resultado.toString() + "0");
                    }
                });

        holder.img_remove.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                resultado = resultado - Double.parseDouble(item.getPreco_Item());
                if (resultado < Double.parseDouble(item.getPreco_Item()))
                {
                    resultado = Double.parseDouble(item.getPreco_Item());
                }
                holder.txt_valor.setText(resultado.toString() + "0");
            }
        });

        holder.btn_add_item.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                quantidade = Double.parseDouble(holder.txt_valor.getText().toString()) / Double.parseDouble(item.getPreco_Item());


                DataService service = conexao.conexao().create(DataService.class);
                ItemPedido itemPedido = new ItemPedido(item.getCod_Item() , quantidade.toString());
                Call<ItemPedido> call = service.inserirItemPedido(itemPedido);

                call.enqueue(new Callback<ItemPedido>() {
                    @Override
                    public void onResponse(Call<ItemPedido> call, Response<ItemPedido> response) {

                    }

                    @Override
                    public void onFailure(Call<ItemPedido> call, Throwable t) {

                    }
                });
            }
        });
    }

    @Override
    public int getItemCount() {
        return listaItens.size();
    }

    public class ItensViewHolder extends RecyclerView.ViewHolder{


        TextView txt_nome_item;
        TextView txt_preview;
        TextView txt_moeda2;
        TextView txt_valor;
        ImageButton img_add;
        ImageButton img_remove;
        ImageView img_item;
        Button btn_add_item;

        public ItensViewHolder(@NonNull View itemView) {
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
