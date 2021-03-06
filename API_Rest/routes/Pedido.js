const express = require('express');
const router = express.Router();
const mysql = require('../mysql').pool;

router.get('/', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            'SELECT * FROM Pedido;',
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
            'SELECT status_Pedido FROM Pedido WHERE cod_Pedido = ?;',
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
            'SELECT * FROM Pedido WHERE status_Pedido = 1;',
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
            'SELECT * FROM Pedido WHERE status_Pedido = 2;',
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
            'SELECT * FROM Pedido WHERE status_Pedido = 3;',
            (error, resultado, fields) => {
                conn.release();
                if (error) { return req.status(500).send({ error: error }) }
                return res.status(200).send(resultado)
            }
        )
    });
});



router.get('/ItensPedidos', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            'SELECT  c.cod_Pedido, d.numero_Mesa, a.cod_Item, b.nome_Item, c.observacao_Pedido, a.quantidade, c.horario_Pedido, b.cod_Cardapio, e.categoria_Cardapio, c.status_Pedido FROM ItemPedido a, Item b, Pedido c, Mesa d, Cardapio e WHERE a.cod_Item = b.cod_Item and c.cod_Pedido = a.cod_Pedido and d.qr_Code = c.qr_Code and b.cod_Cardapio = e.cod_Cardapio;',
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
            'INSERT INTO Pedido (observacao_Pedido, qr_Code) VALUE (?,?);',
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

router.patch('/Status/:cod_Pedido', (req, res, next) => {

    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            `UPDATE Pedido
                SET status_Pedido = ?
                WHERE cod_Pedido      = ?`,
            [
                req.body.status_Pedido,
                req.params.cod_Pedido
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

router.delete('/:cod_Pedido', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            `DELETE FROM Pedido WHERE cod_Pedido = ?`,
            [req.params.cod_Pedido],
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