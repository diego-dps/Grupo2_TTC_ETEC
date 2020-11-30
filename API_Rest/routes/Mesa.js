const express = require('express');
const router = express.Router();
const mysql = require('../mysql').pool;

router.get('/', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            'SELECT * FROM Mesa;',
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
            'INSERT INTO Mesa (qr_Code,numero_Mesa) VALUE (?,?)',
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
                    mensagem: 'Mesa inserida com sucesso!',
                    qr_Code: resultado.insertId
                })
            }
        )
    });

});

router.get('/:qr_Code', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            'SELECT * FROM Mesa WHERE qr_Code = ?;',
            [req.params.qr_Code],
            (error, resultado, fields) => {
                if (error) { return req.status(500).send({ error: error }) }
                return res.status(200).send(resultado)
            }
        )
    });

});

router.get('/Chamada/:chamada_Mesa', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            'SELECT * FROM Mesa WHERE chamada_mesa = 1;',
            [req.params.chamada_Mesa],
            (error, resultado, fields) => {
                if (error) { return req.status(500).send({ error: error }) }
                return res.status(200).send(resultado)
            }
        )
    });

});

router.patch('/:qr_Code', (req, res, next) => {

    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            `UPDATE Mesa
                SET chamada_Mesa = ?
                WHERE qr_Code   = ?`,
            [
                req.body.chamada_Mesa,
                req.params.qr_Code
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
                    mensagem: 'Mesa alterada com sucesso!',
                })
            }
        )
    });
});

router.delete('/', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            `DELETE FROM Mesa WHERE qr_Code = ?`,
            [req.body.qr_Code],
            (error, resultado, field) => {
                conn.release();
                if (error) {
                    return res.status(500).send({
                        error: error,
                        response: null
                    });
                }
                res.status(202).send({
                    mensagem: 'Mesa removida com sucesso!',
                })
            }
        )
    });
});


module.exports = router;