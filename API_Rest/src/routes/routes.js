const connection = require('../database/connection');
const express = require('express');
const router = express.Router();
const PedidoController = require('../controllers/PedidoController');
//const { response } = require('express');

router.post('/CadastrarPedido', PedidoController.CadastrarPedido)

router.get('/ListarPedido', PedidoController.ListarPedido)

//router.put('/AtualizarPedido', PedidoController.listarUsuario)

//router.delete('/DeletarPedido', PedidoController.listarUsuario)

module.exports = router