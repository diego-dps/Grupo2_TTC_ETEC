package com.example.sgbr.api;

import com.example.sgbr.model.Cardapio;
import com.example.sgbr.model.Funcionario;
import com.example.sgbr.model.Item;
import com.example.sgbr.model.ItemPedido;
import com.example.sgbr.model.Mesa;
import com.example.sgbr.model.Pedido;

import java.util.List;

import retrofit2.Call;
import retrofit2.http.Body;
import retrofit2.http.DELETE;
import retrofit2.http.GET;
import retrofit2.http.PATCH;
import retrofit2.http.POST;
import retrofit2.http.Path;

public interface DataService {

    //REQUISIÇÕES CARDÁPIO
    @GET("/Cardapio")
    Call<List<Cardapio>> recuperarCardapio();

    @POST()
    Call<Cardapio> inserirCardapio(@Body Cardapio cardapio);

    @PATCH()
    Call<Cardapio> atualizarCardapio(@Path("cod_Cardapio") int cod_Cardapio, @Body Cardapio cardapio);

    @DELETE()
    Call<Void> removerCardapio(@Path("cod_Cardapio") int cod_Cardapio);

    //REQUISIÇÕES ITEM
    @GET("/Item/Cardapio/{cod_Cardapio}")
    Call<List<Item>> recuperarItens(@Path("cod_Cardapio") String cod_Cardapio);

    /*@GET("/Item")
    Call<List<Item>> recuperarItens(
    );*/

    @POST("/Item")
    Call<Item> inserirItem(@Body Item item);

    @PATCH()
    Call<Item> atualizarItem(@Path("cod_Item") int cod_Item, @Body Item item);

    @DELETE()
    Call<Void> removerItem(@Path("cod_Item") int cod_Item);

    //REQUISIÇÕES ITEM PEDIDO
    @GET("/ItemPedido")
    Call<List<ItemPedido>> recuperarTodosItemPedido();

    @GET("/ItemPedido/Pedido/{cod_Pedido}")
    Call<List<ItemPedido>> recuperarItemPedido(@Path("cod_Pedido") String cod_Pedido);

    @POST("/ItemPedido/")
    Call<ItemPedido> inserirItemPedido(@Body ItemPedido itemPedido);

    @PATCH()
    Call<Mesa> atualizarItemPedido(@Path("cod_Pedido") int cod_Pedido, @Body ItemPedido itemPedido);

    @DELETE("/ItemPedido/{cod_Pedido}")
    Call<Void> removerItemPedido(@Path("cod_Pedido") String cod_Pedido);

    //REQUISIÇÕES MESA
    @GET("/Mesa/{qr_Code}")
    Call<List<Mesa>> recuperarMesa(@Path("qr_Code") String qr_Code);

    @POST()
    Call<Mesa> inserirMesa(@Body Mesa mesa);

    @PATCH()
    Call<Mesa> atualizarMesa(@Path("qr_Code") int qr_Code, @Body Mesa mesa);

    @DELETE()
    Call<Void> removerMesa(@Path("qr_Code") int qr_Code);

    //REQUISIÇÕES PEDIDO
    @GET("/Pedido")
    Call<List<Pedido>> recuperarPedido();

    @POST("/Pedido/")
    Call<Pedido> inserirPedido(@Body Pedido pedido);

    @PATCH()
    Call<Pedido> atualizarPedido(@Path("cod_Pedido") int cod_Pedido, @Body Pedido pedido);

    @DELETE("/Pedido/{cod_Pedido}")
    Call<Void> removerPedido(@Path("cod_Pedido") String cod_Pedido);

    //REQUISIÇÕES FUNCIONÁRIO
    @GET("/Funcionario/Email/{email_Funcionario}")
    Call<List<Funcionario>> recuperarFuncionarios(@Path("email_Funcionario") String email_Funcionario);

    @POST()
    Call<Funcionario> inserirFuncionario(@Body Funcionario funcionario);

    @PATCH()
    Call<Funcionario> atualizarFunionario(@Path("cod_Funcionario") int cod_Funcionario, @Body Funcionario funcionario);

    @DELETE()
    Call<Void> removerFuncionario(@Path("cod_Funcionario") int cod_Funcionario);
}

