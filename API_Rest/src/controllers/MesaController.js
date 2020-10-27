const database = require('../database/connection');

class MesaController{
    CadastrarMesa (request, response){
        const {qr_Code, numero_Mesa} = request.body
        console.log(qr_Code, numero_Mesa);


        database.insert({ qr_Code, numero_Mesa}).table("Mesa").then(data=>{
            console.log(data)
            response.json({message:"Mesa Criada com sucesso!"})
        }).catch(error=>{
            console.log(error)
        })
    }


    ListarMesa(request, response){
        database.select("*").table("Mesa").then(mesas=>{
            console.log(mesas)
            response.json(mesas)
        }).catch(error=>{
            console.log(error)
        })
    }

    AtualizarMesa(){

    }

    DeletarMesa(){

    }
}

module.exports = new MesaController();