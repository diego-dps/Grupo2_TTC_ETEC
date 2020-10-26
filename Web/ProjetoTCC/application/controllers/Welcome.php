<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('Home');
	}
	public function telaLogin()
	{
	  $this->load->view('TelaLogin');
	}
	public function telaADM()
	{
	  $this->load->view('TelaADM');
	}
	public function telaCozinheiro()
	{
	  $this->load->view('TelaCozinheiro');
	}
	public function telaGarcom()
	{
	  $this->load->view('TelaGarcom');
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
		$this->load->model("BuscarFuncionarioModel");
        $lista = $this->BuscarFuncionarioModel->buscarFuncionario();
        $dados = array("funcionario" => $lista);
		$this->load->view('TelaFuncionarios', $dados);
  	}
  	public function telaRecuperarSenha()
	{
		$this->load->view('TelaRecuperarSenha');
  	}
    public function telaPedidos()
	{
		$this->load->model("BuscarPedidoModel");
        $lista = $this->BuscarPedidoModel->buscarpedidos();
        $dados = array("pedido" => $lista);
		$this->load->view('TelaPedidos', $dados);
    }
    public function telaItens()
	{
		$this->load->model("BuscarItemModel");
        $lista = $this->BuscarItemModel->buscarTodos();
        $dados = array("item" => $lista);
        $this->load->view('TelaItens', $dados);
	}
}