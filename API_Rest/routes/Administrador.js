const express = require('express');
const router = express.Router();
const mysql = require('../mysql').pool;

router.get('/', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            'SELECT * FROM Administrador;',
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
            'INSERT INTO Administrador (cod_Funcionario) VALUE (?,?)',
            [req.body.cod_Funcionario],
            (error, resultado, field) => {
                conn.release();
                if (error) {
                    return res.status(500).send({
                        error: error,
                        response: null
                    });
                }
                res.status(201).send({
                    mensagem: 'Administrador inserido com sucesso!',
                    cod_Funcionario: resultado.insertId
                })
            }
        )
    });

});

router.get('/:cod_ADM', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            'SELECT * FROM Administrador WHERE cod_ADM = ?;',
            [req.params.cod_Item],
            (error, resultado, fields) => {
                conn.release();
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
            `UPDATE Administrador
                SET cod_Funcionario = ?,
                WHERE cod_ADM`
            [
                req.body.cod_Funcionario,
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
                    mensagem: 'Administrador Alterado com sucesso!',
                })
            }
        )
    });
});

router.delete('/', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            `DELETE FROM Administrador WHERE cod_ADM = ?`,
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
                    mensagem: 'Administrador Removido com sucesso!',
                })
            }
        )
    });
});


module.exports = router;