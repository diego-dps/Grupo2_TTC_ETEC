package com.example.sgbr.adapter;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageButton;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import com.example.sgbr.R;
import com.example.sgbr.api.Conexao;
import com.example.sgbr.api.DataService;
import com.example.sgbr.model.ItemPedido;
import com.example.sgbr.model.Mesa;
import com.example.sgbr.model.Pedido;
import com.example.sgbr.ui.GarcomHomeActivity;

import java.util.ArrayList;
import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class AdapterMesa extends RecyclerView.Adapter<AdapterMesa.PedidoViewHolder>{

    private Conexao conexao = new Conexao();
    private List<ItemPedido> listaItensPedidos;
    private Context context;
    private GarcomHomeActivity garcomHomeActivity = new GarcomHomeActivity();

    public AdapterMesa(List<ItemPedido> listaItensPedidos, Context context) {
        this.listaItensPedidos = listaItensPedidos;
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

        ItemPedido itemPedido = listaItensPedidos.get(position);
        holder.status.setText(itemPedido.getCod_Pedido());

        holder.btn_excluir.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                DataService service = conexao.conexao().create(DataService.class);
                Call<Void> call = service.removerItemPedido("2");

                call.enqueue(new Callback<Void>() {
                    @Override
                    public void onResponse(Call<Void> call, Response<Void> response) {
                        if (response.isSuccessful()){

                        }
                    }

                    @Override
                    public void onFailure(Call<Void> call, Throwable t) {

                    }
                });
            }
        });
    }

    @Override
    public int getItemCount() {
        return listaItensPedidos.size();
    }

    public class PedidoViewHolder extends RecyclerView.ViewHolder{

        TextView status;
        TextView numero_Mesa;
        ImageButton btn_excluir;


        public PedidoViewHolder(@NonNull View PedidoView) {

            super(PedidoView);

            status = PedidoView.findViewById(R.id.txt_valor_status);
            btn_excluir = PedidoView.findViewById(R.id.btn_excluir);
        }

    }
}