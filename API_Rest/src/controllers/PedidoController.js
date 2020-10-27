const database = require('../database/connection');

class PedidoController{
    CadastrarPedido (request, response){
        const {observacao_Pedido, qr_Code} = request.body
        console.log( observacao_Pedido, qr_Code);


        database.insert({ observacao_Pedido, qr_Code}).table("Pedido").then(data=>{
            console.log(data)
            response.json({message:"Usuario criado com sucesso!"})
        }).catch(error=>{
            console.log(error)
        })
    }


    ListarPedido(request, response){
        database.select("*").table("Pedido").then(pedidos=>{
            console.log(pedidos)
            response.json(pedidos)
        }).catch(error=>{
            console.log(error)
        })
    }

    AtualizarPedido(request, response){
        const cod_Pedido = request.params
        const {observacao_Pedido} = request.body

        database.where({cod_Pedido:cod_Pedido}).update({observacao_Pedido:observacao_Pedido}).table("Pedido").then(data=>{
            response.json({message:"Pedido Atualizado!"})
        }).catch(error=>{
            response.json(error)
        })
    }

    DeletarPedido(request, response){
        
    }
}

module.exports = new PedidoController();