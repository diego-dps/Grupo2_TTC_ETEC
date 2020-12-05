const express = require('express');
const router = express.Router();
const mysql = require('../mysql').pool;

router.get('/', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            'SELECT c.cod_Pedido, a.cod_Item, b.nome_Item, a.observacao_Pedido, a.quantidade, c.horario_Pedido, a.valor_Item, b.foto_Item FROM ItemPedido a, Item b, Pedido c WHERE a.cod_Item = b.cod_Item and c.cod_Pedido = a.cod_Pedido ORDER BY c.cod_Pedido ASC;',
            (error, resultado, fields) => {
                conn.release();
                if (error) { return req.status(500).send({ error: error }) }
                return res.status(200).send(resultado)
            }
        )
    });
});

//Retornando um status de um produto especifico
router.get('/Status/:cod_Pedido', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            'SELECT status_Pedido FROM Pedido, ItemPedido WHERE Pedido.cod_Pedido = ItemPedido.cod_Pedido AND ItemPedido.cod_Pedido = ? ;',
            [req.params.cod_Pedido],
            (error, resultado, fields) => {
                conn.release();
                if (error) { return req.status(500).send({ error: error }) }
                return res.status(200).send(resultado)
            }
        )
    });
});


//Puxando Pedidos aonde o status etiverem como Pendente
router.get('/Pendente', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            'SELECT * FROM Pedido, ItemPedido WHERE Pedido.cod_Pedido = ItemPedido.cod_Pedido AND status_Pedido = 1;',
            (error, resultado, fields) => {
                conn.release();
                if (error) { return req.status(500).send({ error: error }) }
                return res.status(200).send(resultado)
            }
        )
    });
});


//Puxando Pedidos aonde o status etiverem como concluido
router.get('/Concluido', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            'SELECT c.cod_Pedido, d.numero_Mesa, a.cod_Item, b.nome_Item, c.observacao_Pedido, a.quantidade, c.horario_Pedido, c.status_Pedido FROM ItemPedido a, Item b, Pedido c, Mesa d WHERE a.cod_Item = b.cod_Item and c.cod_Pedido = a.cod_Pedido and d.qr_Code = c.qr_Code and c.status_Pedido = "Concluido" ORDER BY c.cod_Pedido asc;',
            (error, resultado, fields) => {
                conn.release();
                if (error) { return req.status(500).send({ error: error }) }
                return res.status(200).send(resultado)
            }
        )
    });
});

//Puxando Pedidos aonde o status etiverem como Entregue
router.get('/Entregue', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            'SELECT * FROM Pedido, ItemPedido WHERE Pedido.cod_Pedido = ItemPedido.cod_Pedido AND status_Pedido = 3;',
            (error, resultado, fields) => {
                conn.release();
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
            'INSERT INTO ItemPedido (cod_Item, cod_Pedido, quantidade, valor_Item, foto_Item) VALUE (?,?,?,?,?)',
            [req.body.cod_Item, req.body.cod_Pedido, req.body.quantidade, req.body.valor_Item, req.body.foto_Item],
            (error, resultado, field) => {
                conn.release();
                if (error) {
                    return res.status(500).send({
                        error: error,
                        response: null
                    });
                }
                res.status(201).send({
                    mensagem: 'ItemPedido inserido com sucesso!'
                })
            }
        )
    });

});

router.get('/Pedido/:cod_Pedido', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            'SELECT c.cod_Pedido, a.cod_Item, b.nome_Item, a.observacao_Pedido, a.quantidade, c.horario_Pedido, a.valor_Item, b.foto_Item FROM ItemPedido a, Item b, Pedido c WHERE a.cod_Item = b.cod_Item and c.cod_Pedido = a.cod_Pedido and c.cod_Pedido = ? ORDER BY c.cod_Pedido ASC;',
            [req.params.cod_Pedido],
            (error, resultado, fields) => {
                conn.release();
                if (error) { return req.status(500).send({ error: error }) }
                return res.status(200).send(resultado)
            }
        )
    });

});

router.get('/PedidoPreco/:cod_Pedido', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            'SELECT c.cod_Pedido, a.cod_Item, b.nome_Item, a.observacao_Pedido, a.quantidade, c.horario_Pedido, sum(a.valor_Item) as valor_Item, b.foto_Item FROM ItemPedido a, Item b, Pedido c WHERE a.cod_Item = b.cod_Item and c.cod_Pedido = a.cod_Pedido and c.cod_Pedido = ? ORDER BY c.cod_Pedido ASC;',
            [req.params.cod_Pedido],
            (error, resultado, fields) => {
                conn.release();
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
                SET observacao_Pedido = ?
                WHERE cod_Pedido = ? AND cod_Item = ?`,
            [
                req.body.observacao_Pedido,
                req.body.cod_Pedido,
                req.body.cod_Item
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
                    mensagem: 'Observação alterada com sucesso!',
                })
            }
        )
    });
});

router.delete('/:cod_Pedido/:cod_Item', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            `DELETE FROM ItemPedido WHERE cod_Pedido = ? AND cod_Item = ?`,
            [
                req.params.cod_Pedido,
                req.params.cod_Item
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
                    mensagem: 'ItemPedido removido com sucesso!',
                })
            }
        )
    });
});


module.exports = router;