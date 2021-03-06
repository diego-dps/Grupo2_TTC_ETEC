package com.example.sgbr.adapter;

import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AlertDialog;
import androidx.recyclerview.widget.RecyclerView;

import com.example.sgbr.R;
import com.example.sgbr.api.Conexao;
import com.example.sgbr.api.DataService;
import com.example.sgbr.model.Mesa;
import com.example.sgbr.ui.CarrinhoComprasActivity;
import com.example.sgbr.ui.GarcomChamadaActivity;

import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class AdapterChamadaCliente extends RecyclerView.Adapter<AdapterChamadaCliente.ChamadaViewHolder> {

    private List<Mesa> listaMesas;
    private Context context;
    private Conexao conexao = new Conexao();

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
        Mesa mesa = listaMesas.get(position);
        holder.chamada_mesa.setText("Mesa "+mesa.getNumero_Mesa()+" chamando!!!");

        holder.btn_removeMesa.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                AlertDialog.Builder dialog = new AlertDialog.Builder(context, R.style.AlertDialogCustom);

                //Configura o titulo e mensagem do Alert
                dialog.setTitle("Excluir");
                dialog.setMessage("Tem certeza que deseja excluir o item selecionado?");

                //Configura o cancelamento do Alert
                dialog.setCancelable(false);

                //Configura o icone do Alert
                //dialog.setIcon(R.drawable.ic_baseline_error_24);

                //Configura as ações do Alert
                dialog.setPositiveButton("Apagar", new DialogInterface.OnClickListener() {
                    @Override
                    public void onClick(DialogInterface dialog, int which) {
                        DataService service = conexao.conexao().create(DataService.class);
                        Mesa mesaAtualizada = new Mesa("0");
                        Call<Mesa> call = service.atualizarMesa(mesa.getQr_Code(), mesaAtualizada);

                        call.enqueue(new Callback<Mesa>() {
                            @Override
                            public void onResponse(Call<Mesa> call, Response<Mesa> response) {
                                if (response.isSuccessful() && response != null){
                                    AlertDialog.Builder dialog1 = new AlertDialog.Builder(context, R.style.AlertDialogCustom);

                                    dialog1.setTitle("Sucesso!");
                                    dialog1.setMessage("Item removido com sucesso!");
                                    dialog1.setIcon(R.drawable.ic_baseline_check_circle_24);
                                    dialog1.setPositiveButton("OK", new DialogInterface.OnClickListener() {
                                        @Override
                                        public void onClick(DialogInterface dialog, int which) {

                                        }
                                    });
                                    dialog1.setCancelable(false);
                                    dialog1.create();
                                    dialog1.show();
                                }
                            }

                            @Override
                            public void onFailure(Call<Mesa> call, Throwable t) {

                            }
                        });
                    }
                });

                dialog.setNegativeButton("Cancelar", new DialogInterface.OnClickListener() {
                    @Override
                    public void onClick(DialogInterface dialog, int which) {

                    }
                });


                //Cria e exibi o Alert
                dialog.create();
                dialog.show();
            }
        });

    }

    @Override
    public int getItemCount() {
        return listaMesas.size();
    }

    public class ChamadaViewHolder extends RecyclerView.ViewHolder{


        TextView chamada_mesa;
        Button btn_removeMesa;

        public ChamadaViewHolder(@NonNull View itemView) {
            super(itemView);

            chamada_mesa = itemView.findViewById(R.id.txt_chamadaMesa);
            btn_removeMesa = itemView.findViewById(R.id.btn_removerMesa);
        }
    }
}
