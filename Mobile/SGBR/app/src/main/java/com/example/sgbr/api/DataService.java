package com.example.sgbr.api;

import com.example.sgbr.model.Cardapio;
import com.example.sgbr.model.Item;
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
    @GET(/*Caminho da ação desejada*/)
    Call<List<Cardapio>> recuperarCardapio();

    @POST()
    Call<Cardapio> inserirCardapio(@Body Cardapio cardapio);

    @PATCH()
    Call<Cardapio> atualizarCardapio(@Path("cod_Cardapio") int cod_Cardapio, @Body Cardapio cardapio);

    @DELETE()
    Call<Void> removerCardapio(@Path("cod_Cardapio") int cod_Cardapio);

    //REQUISIÇÕES ITEM
    @GET(/*Caminho da ação desejada*/)
    Call<List<Item>> recuperarItens();

    @POST()
    Call<Item> inserirItem(@Body Item item);

    @PATCH()
    Call<Item> atualizarItem(@Path("cod_Item") int cod_Item, @Body Item item);

    @DELETE()
    Call<Void> removerItem(@Path("cod_Item") int cod_Item);

    //REQUISIÇÕES MESA
    @GET(/*Caminho da ação desejada*/)
    Call<List<Mesa>> recuperarMesa();

    @POST()
    Call<Mesa> inserirMesa(@Body Mesa mesa);

    @PATCH()
    Call<Mesa> atualizarMesa(@Path("qr_Code") int qr_Code, @Body Mesa mesa);

    @DELETE()
    Call<Void> removerMesa(@Path("qr_Code") int qr_Code);

    //REQUISIÇÕES PEDIDO
    @GET(/*Caminho da ação desejada*/)
    Call<List<Pedido>> recuperarPedido();

    @POST()
    Call<Pedido> inserirPedido(@Body Pedido pedido);

    @PATCH()
    Call<Mesa> atualizarPedido(@Path("cod_Pedido") int cod_Pedido, @Body Pedido pedido);

    @DELETE()
    Call<Void> removerPedido(@Path("cod_Pedido") int cod_Pedido);
}

