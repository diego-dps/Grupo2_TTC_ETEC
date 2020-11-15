const express = require('express');
const router = express.Router();
const mysql = require('../mysql').pool;

router.get('/', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            'SELECT * FROM Pedido;',
            (error, resultado, fields) => {
                if (error) { return req.status(500).send({ error: error }) }
                return res.status(200).send(resultado)
            }
        )
    });
});

router.get('/Itenspedido', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            'SELECT  c.cod_Pedido, d.numero_Mesa, a.cod_Item, b.nome_Item, c.observacao_Pedido, a.quantidade, c.horario_Pedido, b.cod_Cardapio, e.categoria_Cardapio, c.status_Pedido FROM itempedido a, item b, pedido c, mesa d, cardapio e where a.cod_Item = b.cod_Item and c.cod_Pedido = a.cod_Pedido and d.qr_Code = c.qr_Code and b.cod_Cardapio = e.cod_Cardapio;',
            (error, resultado, fields) => {
                if (error) { return req.status(500).send({ error: error }) }
                return res.status(200).send(resultado)
            }
        )
    });
});

router.post('/', (req, res, next) => {

    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            'CALL SP_CadastrarPedido(?, ?, ?, ?, ?, ?, ?);',
            [req.body.observacao_Pedido, req.body.qr_Code],
            (error, resultado, field) => {
                conn.release();
                if (error) {
                    return res.status(500).send({
                        error: error,
                        response: null
                    });
                }
                res.status(201).send({
                    mensagem: 'Pedido inserido com sucesso!',
                })
            }
        )
    });

});

router.get('/:cod_Pedido', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            'SELECT * FROM Pedido WHERE cod_Pedido = ?;',
            [req.params.id_produto],
            (error, resultado, fields) => {
                if (error) { return req.status(500).send({ error: error }) }
                return res.status(200).send({ response: resultado })
            }
        )
    });
});

router.patch('/', (req, res, next) => {

    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            `UPDATE Pedido
                SET observacao_Pedido = ?
                WHERE cod_Pedido      = ?`,
            [
                req.body.horario_Pedido,
                req.body.observacao_Pedido,
                req.body.cod_Pedido
            ],
            (error, resultado, field) => {
                conn.release();
                if (error) {
                    return res.status(500).send({
                        error: error,
                        response: null
                    });
                }
                res.status(202).send({
                    mensagem: 'Pedido alterado com sucesso!',
                })
            }
        )
    });
});

router.delete('/', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            `DELETE FROM Pedido WHERE cod_Pedido = ?`,
            [req.body.id_produto],
            (error, resultado, field) => {
                conn.release();
                if (error) {
                    return res.status(500).send({
                        error: error,
                        response: null
                    });
                }
                res.status(202).send({
                    mensagem: 'Pedido removido com sucesso com sucesso!',
                })
            }
        )
    });
});

module.exports = router;