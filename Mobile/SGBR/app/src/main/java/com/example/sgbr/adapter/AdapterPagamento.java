package com.example.sgbr.adapter;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import com.example.sgbr.R;
import com.example.sgbr.model.Item;

import java.util.List;

public class AdapterPagamento extends RecyclerView.Adapter<AdapterPagamento.PagamentoViewHolder>{

    private List<Item> listaItem;
    private Context context;

    public AdapterPagamento(List<Item> listaItem, Context context) {
        this.listaItem = listaItem;
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

    }

    @Override
    public int getItemCount() {
        return 0;
    }

    public class PagamentoViewHolder extends RecyclerView.ViewHolder{

        public PagamentoViewHolder(@NonNull View itemView) {
            super(itemView);
        }
    }
}
