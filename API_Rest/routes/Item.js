const express = require('express');
const router = express.Router();
const mysql = require('../mysql').pool;

router.get('/', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            'SELECT * FROM Item;',
            (error, resultado, fields) => {
                if (error) { return req.status(500).send({ error: error }) }
                return res.status(200).send({ response: resultado })
            }
        )
    });
});

router.post('/', (req, res, next) => {

    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            'INSERT INTO Item (cod_Cardapio,nome_Item,descricao_Item,preco_Item, Ativo, foto_Item) VALUE (?,?)',
            [req.body.qr_Code, req.body.numero_Mesa],
            (error, resultado, field) => {
                conn.release();
                if (error) {
                    return res.status(500).send({
                        error: error,
                        response: null
                    });
                }
                res.status(201).send({
                    mensagem: 'Item inserido com sucesso!',
                    qr_Code: resultado.insertId
                })
            }
        )
    });

});

router.get('/:cod_Item', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            'SELECT * FROM Item WHERE cod_Item = ?;',
            [req.params.cod_Item],
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
            `UPDATE Item
                SET cod_Cardapio   = ?,
                    nome_Item      = ?,
                    descricao_Item = ?,
                    preco_Item     = ?,
                    Ativo          = ?
                    foto_Item      = ?,
                    WHERE cod_Item = ?`,
            [
                req.body.cod_Item,
                req.body.nome_Item,
                req.body.descricao_Item,
                req.body.preco_Item,
                req.body.Ativo,
                req.body.foto_Item,
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
                    mensagem: 'Item alterado com sucesso!',
                })
            }
        )
    });
});

router.delete('/', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            `DELETE FROM Item WHERE cod_Item = ?`,
            [req.body.cod_Item],
            (error, resultado, field) => {
                conn.release();
                if (error) {
                    return res.status(500).send({
                        error: error,
                        response: null
                    });
                }
                res.status(202).send({
                    mensagem: 'Item removido com sucesso!',
                })
            }
        )
    });
});


module.exports = router;