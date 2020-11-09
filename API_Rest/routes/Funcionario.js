const express = require('express');
const router = express.Router();
const mysql = require('../mysql').pool;

router.get('/', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            'SELECT * FROM Funcionario;',
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
            'INSERT INTO Funcionario (nome_Funcionario, cpf_Funcionario, telefone_Funcionario, cargo_Funcionario, email_funcionario, senha) VALUE (?,?,?,?,?,?)',
            [
                req.body.nome_Funcionario,
                req.body.cpf_Funcionario,
                req.body.telefone_Fucionario,
                req.body.cargo_Fucionario,
                req.body.email_Fucionario,
                req.body.senha
            ],
            (error, resultado, field) => {
                conn.release();
                if (error) {
                    return res.status(500).send({
                        error: error,
                        response: null
                    });
                }
                res.status(201).send({
                    mensagem: 'Funcionario cadastrado com sucesso!',
                    cod_Funcionario: resultado.cod_Funcionario
                })
            }
        )
    });

});

router.get('/:cod_Funcionario', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            'SELECT * FROM Funcionario WHERE cod_Funcionario = ?;',
            [req.params.cod_Funcionario],
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
            `UPDATE Funcionario
                SET nome_Funcionario     = ?,
                    cpf_Funcionario      = ?,
                    telefone_Funcionario = ?,
                    cargo_Funcionario    = ?,
                    email.Funcionario    = ?,
                    senha
                WHERE cod_Cardapio   = ?`,
            [
                req.body.cod_Funcionario
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
                    mensagem: 'Dados cadastrais atualizados com  sucesso!',
                })
            }
        )
    });
});

router.delete('/', (req, res, next) => {
    mysql.getConnection((error, conn) => {
        if (error) { return req.status(500).send({ error: error }) }
        conn.query(
            `DELETE FROM Funcionario WHERE cod_Funcionario = ?`,
            [req.body.cod_Funcionario],
            (error, resultado, field) => {
                conn.release();
                if (error) {
                    return res.status(500).send({
                        error: error,
                        response: null
                    });
                }
                res.status(202).send({
                    mensagem: 'Funcionário removido com sucesso!',
                })
            }
        )
    });
});


module.exports = router;