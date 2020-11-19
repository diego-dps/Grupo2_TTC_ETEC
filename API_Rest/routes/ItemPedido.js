const express = require('express');
const router = express.Router();
const mysql = require('../mysql').pool;

router.get('/', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            'SELECT c.cod_Pedido, a.cod_Item, b.nome_Item, c.observacao_Pedido, a.quantidade, c.horario_Pedido, b.preco_Item FROM itempedido a, item b, pedido c WHERE a.cod_Item = b.cod_Item and c.cod_Pedido = a.cod_Pedido ORDER BY c.cod_Pedido ASC;',
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
            'INSERT INTO ItemPedido (cod_Item, cod_Pedido, quantidade, valor_Item) VALUE (?,?,?,?)',
            [req.body.cod_Item, req.body.cod_Pedido, req.body.quantidade, req.body.valor_Item],
            (error, resultado, field) => {
                conn.release();
                if (error) {
                    return res.status(500).send({
                        error: error,
                        response: null
                    });
                }
                res.status(201).send({
                    mensagem: 'ItemPedido inserido com sucesso!',
                    cod_Pedido: resultado.insertId
                })
            }
        )
    });

});

router.get('/Pedido/:cod_Pedido', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            'SELECT c.cod_Pedido, a.cod_Item, b.nome_Item, c.observacao_Pedido, a.quantidade, c.horario_Pedido, b.preco_Item FROM itempedido a, item b, pedido c WHERE a.cod_Item = b.cod_Item and c.cod_Pedido = a.cod_Pedido and c.cod_Pedido = ? ORDER BY c.cod_Pedido ASC;',
            [req.params.cod_Pedido],
            (error, resultado, fields) => {
                if (error) { return req.status(500).send({ error: error }) }
                return res.status(200).send(resultado)
            }
        )
    });

});

router.patch('/', (req, res, next) => {

    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            `UPDATE ItemPedido
                SET quantidade_Item = ?
                WHERE cod_Pedido    = ?`,
            [
                req.body.numero_Mesa,
                req.body.qr_Code
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
                    mensagem: 'quantidade alterada com sucesso!',
                })
            }
        )
    });
});

router.delete('/:cod_Pedido', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            `DELETE FROM ItemPedido WHERE cod_Pedido = ?`,
            [req.body.cod_Pedido],
            (error, resultado, field) => {
                conn.release();
                if (error) {
                    return res.status(500).send({
                        error: error,
                        response: null
                    });
                }
                res.status(202).send({
                    mensagem: 'ItemPedido removido com sucesso!',
                })
            }
        )
    });
});


module.exports = router;