const connection = require('../database/connection');
const express = require('express');
const router = express.Router();
const PedidoController = require('../controllers/PedidoController');
const MesaController = require('../controllers/MesaController');

//Pedido

router.post('/CadastrarPedido', PedidoController.CadastrarPedido)
router.get('/ListarPedido', PedidoController.ListarPedido)
router.put('/AtualizarPedido/:cod_Pedido', PedidoController.AtualizarPedido)
//router.delete('/DeletarPedido', PedidoController.listarUsuario)


//Mesa
router.post('/CadastrarMesa', MesaController.CadastrarMesa)
router.get('/ListarMesa', MesaController.ListarMesa)
//router.put('AtualizarMesa', MesaController.AtualizarMesa)
//router.delete('DeletarMesa', MesaController.DeletarMesa)


module.exports = router