package com.example.sgbr.adapter;

import android.app.ProgressDialog;
import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AlertDialog;
import androidx.recyclerview.widget.RecyclerView;

import com.example.sgbr.R;
import com.example.sgbr.api.Conexao;
import com.example.sgbr.api.DataService;
import com.example.sgbr.model.Item;
import com.example.sgbr.model.ItemPedido;
import com.example.sgbr.model.Mesa;
import com.example.sgbr.model.Pedido;
import com.example.sgbr.ui.CarrinhoComprasActivity;
import com.example.sgbr.ui.GarcomHomeActivity;

import java.util.List;
import java.util.Timer;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class AdapterMesa extends RecyclerView.Adapter<AdapterMesa.PedidoViewHolder>{

    private Conexao conexao = new Conexao();
    private List<ItemPedido> listaItensPedidos;
    private Context context;
    private GarcomHomeActivity garcomHomeActivity = new GarcomHomeActivity();
    private ProgressDialog progressDialog;

    public AdapterMesa(List<ItemPedido> listaItensPedidos, Context context) {
        this.listaItensPedidos = listaItensPedidos;
        this.context = context;
    }

    public List<ItemPedido> getListaItensPedidos(){
        return listaItensPedidos;
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

        holder.cod_Pedido.setText(itemPedido.getCod_Pedido());
        holder.num_Mesa.setText(itemPedido.getNumero_Mesa());
        holder.nome_Item.setText(itemPedido.getnome_Item());
        holder.quantidade.setText(itemPedido.getQuantidade());
        holder.observacao.setText(itemPedido.getobservacao_Pedido());

        holder.btn_removerPedido.setOnClickListener(new View.OnClickListener() {
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
                        Pedido pedido = new Pedido("Entregue");
                        Call<Pedido> call = service.atualizarPedido(itemPedido.getCod_Pedido(), pedido);

                        call.enqueue(new Callback<Pedido>() {
                            @Override
                            public void onResponse(Call<Pedido> call, Response<Pedido> response) {
                                if (response.isSuccessful() && response != null){
                                    /*progressDialog = new ProgressDialog(context);
                                    progressDialog.show();
                                    progressDialog.setContentView(R.layout.progress_dialog);
                                    progressDialog.getWindow().setBackgroundDrawableResource(
                                            android.R.color.transparent
                                    );

                                    progressDialog.dismiss();*/

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
                            public void onFailure(Call<Pedido> call, Throwable t) {

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
        return listaItensPedidos.size();
    }

    public class PedidoViewHolder extends RecyclerView.ViewHolder{

        TextView cod_Pedido;
        TextView num_Mesa;
        TextView nome_Item;
        TextView quantidade;
        TextView total;
        TextView observacao;
        Button btn_removerPedido;

        public PedidoViewHolder(@NonNull View PedidoView) {

            super(PedidoView);

            cod_Pedido = PedidoView.findViewById(R.id.txt_numPedido);
            num_Mesa = PedidoView.findViewById(R.id.txt_num_mesa);
            nome_Item = PedidoView.findViewById(R.id.txt_itemPedido);
            quantidade = PedidoView.findViewById(R.id.quantidade);
            total = PedidoView.findViewById(R.id.preco_total);
            observacao = PedidoView.findViewById(R.id.observacao);
            btn_removerPedido = PedidoView.findViewById(R.id.btn_removerPedido);
        }

    }
}