const database = require('../database/connection');

class PedidoController{
    CadastrarPedido (request, response){
        const {horario_Pedido, observacao_Pedido, qr_Code} = request.body
        console.log(horario_Pedido, observacao_Pedido, qr_Code);


        database.insert({horario_Pedido, observacao_Pedido, qr_Code}).table("Pedido").then(data=>{
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

    AtualizarPedido(){

    }
}

module.exports = new PedidoController();