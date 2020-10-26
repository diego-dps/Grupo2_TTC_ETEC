<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastrosModel extends CI_Model {

	public function CadastrarFuncionario($dados)
	{
		return $this->db->insert('Funcionario', $dados);
    }
    public function VerificarEmail($dados)
    {
        $this->db->where('email_Funcionario', $dados['email_Funcionario']);
        $linhaEmail = $this->db->get("Funcionario")->row_array();
        return $linhaEmail;
    }
    public function VerificarCPF($dados)
    {
        $this->db->where('cpf_Funcionario', $dados['cpf_Funcionario']);
        $linhaCpf = $this->db->get("Funcionario")->row_array();
        return $linhaCpf;
    }
    public function VerificarCelular($dados)
    {
        $this->db->where('telefone_Funcionario', $dados['telefone_Funcionario']);
        $linhaCelular = $this->db->get("Funcionario")->row_array();
        return $linhaCelular;
    }
	
    public function CadastrarItem($dados)
	{
		return $this->db->insert('Item', $dados);
	}
}