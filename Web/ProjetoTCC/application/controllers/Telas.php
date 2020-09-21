<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Telas extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
    }
    
    public function telaADM()
	{
		$this->load->view('TelaADM');
    }
    
    public function telaAlterarSenha()
	{
		$this->load->view('TelaAlterarSenha');
    }
    
    public function telaCadastrarItem()
	{
		$this->load->view('TelaCadastrarItem');
    }

    public function telaCadastrarFuncionario()
	{
		$this->load->view('TelaCadastroFuncionario');
    }

    public function telaFuncionarios()
	{
		$this->load->view('TelaFuncionarios');
    }

    public function telaLogin()
	{
		$this->load->view('TelaLogin');
    }

    public function telaRecuperarSenha()
	{
		$this->load->view('TelaRecuperarSenha');
    }

    public function telaPedidos()
	{
		$this->load->view('TelaPedidos');
    }

    public function telaItens()
	{
		$this->load->view('TelaItens');
	}
}