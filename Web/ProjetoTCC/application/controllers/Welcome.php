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
		$this->load->model("BuscarCardapio");
        $lista = $this->BuscarCardapio->buscarTodos();
        $dados = array("cardapio" => $lista);
		$this->load->view('TelaCadastrarItem', $dados);
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
	public function pesquisarFuncionarios()
	{
		$this->load->model("BuscarFuncionarioModel");
        $lista = $this->BuscarFuncionarioModel->buscar();
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
		$this->load->model(array('BuscarItemModel','BuscarCardapio'));
		$lista = $this->BuscarItemModel->buscarTodos();
		$itens = array("item" => $lista);
        $lista2 = $this->BuscarCardapio->buscarTodos();
		$cardapio = array("cardapio" => $lista2);
		$this->load->view('TelaItens', $itens, $cardapio);
	}
	public function pesquisarItens()
	{
		$this->load->model('BuscarItemModel');
		$lista = $this->BuscarItemModel->buscar();
		$itens = array("item" => $lista);
		$this->load->view('TelaItens', $itens);
	}
	public function telaCardapio()
	{
		$this->load->model("BuscarCardapio");
        $lista = $this->BuscarCardapio->buscarTodos();
        $dados = array("cardapio" => $lista);
		$this->load->view('TelaCardapio', $dados);
	}
	public function telaCadastroCardapio()
	{
		$this->load->model("BuscarItemModel");
        $lista = $this->BuscarItemModel->buscarTodos();
        $dados = array("item" => $lista);
		$this->load->view('TelaCadastroCardapio', $dados);
	}
	public function itensCardapio()
	{
		$this->load->model('BuscarItensCardapio');
		$lista = $this->BuscarItensCardapio->buscarTodos();
		$itens = array("item" => $lista);
		$this->load->view('ItensCardapio', $itens);
	}
}