<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastrosModel extends CI_Model {

	public function CadastrarFuncionario($dados)
	{
		return $this->db->insert('Funcionario', $dados);
    }
    
    public function CadastrarItem($dados)
	{
		return $this->db->insert('Item', $dados);
	}
}