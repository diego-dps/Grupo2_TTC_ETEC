const express = require('express');
const database = require('./src/database/connection');
//const { use } = require('./src/routes/routes');
const router = require('./src/routes/routes')

const app = express();
app.use(express.json())
app.use(router)


app.listen(4000,()=>{
    console.log("aplicação rodando na porta 4000")
})

app.get('/',(request,response)=>{
    response.send("Conexão realizada com sucesso!")
})