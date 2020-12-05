<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UpdateFuncionarioModel extends CI_Model {
    
    function atualizarFuncionario($dados) {
        
        $data = [
            'nome_Funcionario' => $dados['nome'],
            'cpf_Funcionario' => $dados['cpf'],
            'telefone_Funcionario' => $dados['celular'],
            'cargo_Funcionario' => $dados['Cargo'],
            'email_Funcionario' => $dados['email'],
            'senha' => $dados['senha']
        ];

        $this->db->where('cod_Funcionario', $dados['cod_Funcionario']);
        $this->db->set($data);

        return $this->db->update("Funcionario",$data);
    }

}