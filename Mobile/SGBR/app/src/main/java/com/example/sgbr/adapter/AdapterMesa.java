package com.example.sgbr.adapter;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import com.example.sgbr.R;
import com.example.sgbr.model.ItemPedido;
import com.example.sgbr.model.Mesa;

import java.util.List;

public class AdapterMesa extends RecyclerView.Adapter<AdapterMesa.MesaViewHolder>{

    private List<Mesa> listaMesa;
    private Context context;

    public AdapterMesa(List<Mesa> listaMesa, Context context) {
        this.listaMesa = listaMesa;
        this.context = context;
    }

    @NonNull
    @Override
    public MesaViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {

        View view = LayoutInflater.from(parent.getContext())
                .inflate(R.layout.garcom_pedido, parent, false);

        return new MesaViewHolder(view);
    }

    @Override
    public void onBindViewHolder(@NonNull MesaViewHolder holder, int position) {

        Mesa mesa = listaMesa.get(position);
                holder.qr_Code.setText(mesa.getQr_Code());
                holder.numero_Mesa.setText(mesa.getNumero_Mesa());
    }

    @Override
    public int getItemCount() {
        return listaMesa.size();
    }

    public class MesaViewHolder extends RecyclerView.ViewHolder{

        TextView qr_Code;
        TextView numero_Mesa;


        public MesaViewHolder(@NonNull View MesaView) {

            super(MesaView);

        }
    }
}