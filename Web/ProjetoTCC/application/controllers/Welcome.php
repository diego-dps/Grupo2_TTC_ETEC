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
		$this->load->model('BuscarPedidoModel');
		$lista = $this->BuscarPedidoModel->countpedidospendentes();
		$dados['pendente'] = $lista;
		$lista2 = $this->BuscarPedidoModel->countpedidosentregues();
		$dados['entregue'] = $lista2;
		$lista3 = $this->BuscarPedidoModel->countpedidosconcluidos();
		$dados['concluido'] = $lista3;

	  	$this->load->view('TelaADM', $dados);
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
	public function telaPedidosGarcom()
	{
		$this->load->model("BuscarPedidoModel");
        $lista = $this->BuscarPedidoModel->buscarpedidos();
        $dados = array("pedido" => $lista);
		$this->load->view('TelaPedidosGarcom', $dados);
	}
	public function telaPedidosCozinha()
	{
		$this->load->model("BuscarPedidoModel");
        $lista = $this->BuscarPedidoModel->buscarpedidos();
        $dados = array("pedido" => $lista);
		$this->load->view('TelaPedidosCozinha', $dados);
	}
	public function telaPedidosEntregues()
	{
		$this->load->model("BuscarPedidoModel");
        $lista = $this->BuscarPedidoModel->buscarpedidosentregues();
        $dados = array("pedido" => $lista);
		$this->load->view('TelaPedidos', $dados);
	}
	public function telaPedidosEntreguesGarcom()
	{
		$this->load->model("BuscarPedidoModel");
        $lista = $this->BuscarPedidoModel->buscarpedidosentregues();
        $dados = array("pedido" => $lista);
		$this->load->view('TelaPedidosGarcom', $dados);
	}
	public function telaPedidosEntreguesCozinha()
	{
		$this->load->model("BuscarPedidoModel");
        $lista = $this->BuscarPedidoModel->buscarpedidosentregues();
        $dados = array("pedido" => $lista);
		$this->load->view('TelaPedidosCozinha', $dados);
	}
	public function telaPedidosPendentes()
	{
		$this->load->model("BuscarPedidoModel");
        $lista = $this->BuscarPedidoModel->buscarpedidospendentes();
        $dados = array("pedido" => $lista);
		$this->load->view('TelaPedidos', $dados);
	}
	public function telaPedidosPendentesGarcom()
	{
		$this->load->model("BuscarPedidoModel");
        $lista = $this->BuscarPedidoModel->buscarpedidospendentes();
        $dados = array("pedido" => $lista);
		$this->load->view('TelaPedidosGarcom', $dados);
	}
	public function telaPedidosPendentesCozinha()
	{
		$this->load->model("BuscarPedidoModel");
        $lista = $this->BuscarPedidoModel->buscarpedidospendentes();
        $dados = array("pedido" => $lista);
		$this->load->view('TelaPedidosCozinha', $dados);
	}
	public function telaPedidosConcluidos()
	{
		$this->load->model("BuscarPedidoModel");
        $lista = $this->BuscarPedidoModel->buscarpedidosconcluidos();
        $dados = array("pedido" => $lista);
		$this->load->view('TelaPedidos', $dados);
	}
	public function telaPedidosConcluidosGarcom()
	{
		$this->load->model("BuscarPedidoModel");
        $lista = $this->BuscarPedidoModel->buscarpedidosconcluidos();
        $dados = array("pedido" => $lista);
		$this->load->view('TelaPedidosGarcom', $dados);
	}
	public function telaPedidosConcluidosCozinha()
	{
		$this->load->model("BuscarPedidoModel");
        $lista = $this->BuscarPedidoModel->buscarpedidosconcluidos();
        $dados = array("pedido" => $lista);
		$this->load->view('TelaPedidosCozinha', $dados);
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
	public function telaCardapioGarcom()
	{
		$this->load->model("BuscarCardapio");
        $lista = $this->BuscarCardapio->buscarTodos();
        $dados = array("cardapio" => $lista);
		$this->load->view('TelaCardapioGarcom', $dados);
	}
	public function telaCardapioCozinha()
	{
		$this->load->model("BuscarCardapio");
        $lista = $this->BuscarCardapio->buscarTodos();
        $dados = array("cardapio" => $lista);
		$this->load->view('TelaCardapioCozinha', $dados);
	}
	public function telaCadastroCardapio()
	{
		$this->load->view('TelaCadastroCardapio');
	}
	public function itensCardapio()
	{
		$this->load->model('BuscarItensCardapio');
		$lista = $this->BuscarItensCardapio->buscarTodos();
		$itens = array("item" => $lista);
		$this->load->view('ItensCardapio', $itens);
	}
	public function itensCardapioGarcom()
	{
		$this->load->model('BuscarItensCardapio');
		$lista = $this->BuscarItensCardapio->buscarTodos();
		$itens = array("item" => $lista);
		$this->load->view('ItensCardapioGarcom', $itens);
	}
	public function itensCardapioCozinha()
	{
		$this->load->model('BuscarItensCardapio');
		$lista = $this->BuscarItensCardapio->buscarTodos();
		$itens = array("item" => $lista);
		$this->load->view('ItensCardapioCozinha', $itens);
	}
}