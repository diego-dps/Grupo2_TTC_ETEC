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
	
    public function CadastrarItem($dados, $nome_arquivo)
	{
        $query = [
            'cod_Cardapio' => $dados['cod_Cardapio'],
            'nome_Item' => $dados['nome_Item'],
            'descricao_Item' => $dados['descricao_Item'],
            'preco_Item' => $dados['preco_Item'],
            'foto_Item' => $nome_arquivo,
        ];
		return $this->db->insert('Item', $query);
    }
    
    public function CadastrarCardapio($nome, $nome_arquivo)
	{
        $data = [
            'categoria_Cardapio' => $nome,
            'foto_Cardapio' => $nome_arquivo
        ];
		return $this->db->insert('Cardapio', $data);
    }
    
    public function alterarStatus($id, $Status){
        
        $data = [
            'status_Pedido' => $Status
        ];

        $this->db->where('cod_Pedido', $id);
        $this->db->set($data);
        return $this->db->update("Pedido",$data);
    }
}