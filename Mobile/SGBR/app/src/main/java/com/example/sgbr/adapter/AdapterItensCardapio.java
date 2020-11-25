package com.example.sgbr.adapter;

import android.content.Context;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.ImageButton;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import com.bumptech.glide.Glide;
import com.example.sgbr.R;
import com.example.sgbr.api.Conexao;
import com.example.sgbr.api.DataService;
import com.example.sgbr.model.Item;
import com.example.sgbr.model.ItemPedido;
import com.example.sgbr.model.Pedido;

import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class AdapterItensCardapio extends RecyclerView.Adapter<AdapterItensCardapio.ItensViewHolder> {

    private Conexao conexao = new Conexao();
    private  List<Item> listaItens;
    private Context context;
    private Double resultado = 0.0;
    private Integer soma;
    private Integer menos;
    private Double quantidade;
    private List<Pedido> listaPedido;
    private Double valor;

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
                holder.txt_num_itens.setText("1");
                holder.txt_valor.setText(item.getPreco_Item());

                holder.img_add.setOnClickListener(new View.OnClickListener() {
                    @Override
                    public void onClick(View v) {
                        resultado = Double.parseDouble(item.getPreco_Item()) + Double.parseDouble(holder.txt_valor.getText().toString());
                        holder.txt_valor.setText(resultado.toString() + "0");
                        soma = Integer.parseInt(holder.txt_num_itens.getText().toString()) + Integer.parseInt("1");
                        holder.txt_num_itens.setText(soma.toString());
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

                soma = Integer.parseInt(holder.txt_num_itens.getText().toString()) - Integer.parseInt("1");
                if (soma < 1){
                    soma = Integer.parseInt(holder.txt_num_itens.getText().toString());
                }
                holder.txt_num_itens.setText(soma.toString());
            }
        });

        holder.btn_add_item.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                DataService service = conexao.conexao().create(DataService.class);
                Call<List<Pedido>> callPedido = service.recuperarPedido();

                callPedido.enqueue(new Callback<List<Pedido>>() {
                    @Override
                    public void onResponse(Call<List<Pedido>> call, Response<List<Pedido>> response) {
                        if (response.isSuccessful()){
                            listaPedido = response.body();
                            for(int i=0; i < listaPedido.size(); i++){

                                Pedido pedido = listaPedido.get(listaPedido.size() -1);
                                Log.d("Resultado", "Resultado: "+ pedido.getCod_Pedido());
                            }

                            Pedido pedido = listaPedido.get(listaPedido.size() - 1);
                            Toast.makeText(context, ""+pedido.getCod_Pedido(), Toast.LENGTH_SHORT).show();
                            quantidade = Double.parseDouble(holder.txt_valor.getText().toString()) / Double.parseDouble(item.getPreco_Item());
                            valor = Double.parseDouble(holder.txt_num_itens.getText().toString()) * Double.parseDouble(item.getPreco_Item());

                            DataService service = conexao.conexao().create(DataService.class);
                            ItemPedido itemPedido = new ItemPedido(pedido.getCod_Pedido(), item.getCod_Item() , quantidade.toString(), valor.toString());
                            Call<ItemPedido> call1 = service.inserirItemPedido(itemPedido);

                            call1.enqueue(new Callback<ItemPedido>() {
                                @Override
                                public void onResponse(Call<ItemPedido> call, Response<ItemPedido> response) {
                                    if (response.isSuccessful()){
                                        Toast.makeText(context, "Pedido realizado com sucesso: " + pedido.getCod_Pedido(), Toast.LENGTH_SHORT).show();
                                    }
                                }

                                @Override
                                public void onFailure(Call<ItemPedido> call, Throwable t) {

                                }
                            });


                        }
                    }

                    @Override
                    public void onFailure(Call<List<Pedido>> call, Throwable t) {

                    }
                });
            }
        });

        Glide.with(context)
                .load("http://192.168.0.14:80/Grupo2_TTC_ETEC/Web/ProjetoTCC/assets/img/itens/"+item.getFoto_Item())
                .centerCrop()
                .into(holder.img_item);
    }

    @Override
    public int getItemCount() { return listaItens.size(); }

    public class ItensViewHolder extends RecyclerView.ViewHolder{


        TextView txt_nome_item;
        TextView txt_preview;
        TextView txt_moeda2;
        TextView txt_valor;
        TextView txt_num_itens;
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
            txt_num_itens = itemView.findViewById(R.id.txt_num_itens);

        }
    }
}
