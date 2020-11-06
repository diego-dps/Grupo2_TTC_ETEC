package com.example.sgbr.adapter;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import com.example.sgbr.R;
import com.example.sgbr.model.Mesa;

import java.util.List;

public class AdapterChamadaCliente extends RecyclerView.Adapter<AdapterChamadaCliente.ChamadaViewHolder> {

    private List<Mesa> listaMesas;
    private Context context;

    public AdapterChamadaCliente(List<Mesa> listaMesas, Context context) {
        this.listaMesas = listaMesas;
        this.context = context;
    }

    @NonNull
    @Override
    public ChamadaViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {

        View view = LayoutInflater.from(parent.getContext())
                .inflate(R.layout.garcom_chamada_cliente, parent, false);

        return new ChamadaViewHolder(view);
    }

    @Override
    public void onBindViewHolder(@NonNull ChamadaViewHolder holder, int position) {

    }

    @Override
    public int getItemCount() {
        return listaMesas.size();
    }

    public class ChamadaViewHolder extends RecyclerView.ViewHolder{

        public ChamadaViewHolder(@NonNull View itemView) {
            super(itemView);
        }
    }
}
