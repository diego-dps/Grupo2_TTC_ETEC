<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastroFuncionario extends CI_Controller {

	public function validarCadastroFuncionario(){

        $dados =[
            'nome' => $this->input->post("nome"),
            'email' => $this->input->post("email"),
            'cpf' => $this->input->post("cpf"),
            'senha' => $this->input->post("pass"),
            'celular' => $this->input->post("celular"),
            'ConfSenha' => $this->input->post("ConfPass"),
            'Cargo' => $this->input->post("SelecionarCargo"),
        ];

        if(empty($dados['nome'])){
            echo "ErroNome";
            die();
        }

        if(empty($dados['cpf'])){
            echo "Errocpf";
            die();
        }

        if($dados['cpf'] <= 14){
            echo "CPfdeve11";
            die();
        }

        if(empty($dados['celular'])){
            echo "ErroCelular";
            die();
        }

        if(empty($dados['Cargo'])){
            echo "ErroCargo";
            die();
        }

        if(empty($dados['email'])){
            echo "ErroEmail";
            die();
        }

        if(empty($dados['senha'])){
            echo "ErroPass";
            die();
        }

        if(empty($dados['ConfSenha'])){
            echo "ErroConfSenha";
            die();
        }

        if($dados['ConfSenha'] != $dados['senha']){
            echo "ErroSenhaNaoConfere";
            die();
        }

        echo "Sucesso";
		
    }
    
    public function validarCadastroFuncionarioresponsivo(){
        $dados =[
            'nome' => $this->input->post("NOME"),
            'email' => $this->input->post("EMAIL"),
            'cpf' => $this->input->post("CPF"),
            'senha' => $this->input->post("PASS"),
            'celular' => $this->input->post("CELULAR"),
            'ConfSenha' => $this->input->post("CONFPASS"),
            'Cargo' => $this->input->post("SELECIONARCARGO"),
        ];
        if(empty($dados['nome'])){
            echo "ErroNome";
            die();
        }
        if(empty($dados['email'])){
            echo "ErroEmail";
            die();
        }
        if(empty($dados['cpf'])){
            echo "Errocpf";
            die();
        }
        if(empty($dados['celular'])){
            echo "ErroCelular";
            die();
        }
        if(empty($dados['Cargo'])){
            echo "ErroCargo";
            die();
        }
        if(empty($dados['senha'])){
            echo "ErroPass";
            die();
        }
        if(empty($dados['ConfSenha'])){
            echo "ErroConfSenha";
            die();
        }
        if($dados['ConfSenha'] != $dados['senha']){
            echo "ErroSenhaNaoConfere";
            die();
        }
        echo "Sucesso";		
    }
    
    public function validarEdicaoFuncionario(){

        $dados =[
            'nome' => $this->input->post("nome"),
            'email' => $this->input->post("email"),
            'cpf' => $this->input->post("cpf"),
            'senha' => $this->input->post("pass"),
            'celular' => $this->input->post("celular"),
            'ConfSenha' => $this->input->post("ConfPass"),
            'Cargo' => $this->input->post("SelecionarCargo"),
        ];
        if(empty($dados['nome'])){
            echo "ErroNome";
            die();
        }
        if(empty($dados['cpf'])){
            echo "Errocpf";
            die();
        }
        if($dados['cpf'] <= 14){
            echo "CPfdeve11";
            die();
        }
        if(empty($dados['celular'])){
            echo "ErroCelular";
            die();
        }
        if(empty($dados['Cargo'])){
            echo "ErroCargo";
            die();
        }
        if(empty($dados['email'])){
            echo "ErroEmail";
            die();
        }
        if(empty($dados['senha'])){
            echo "ErroPass";
            die();
        }
        if(empty($dados['ConfSenha'])){
            echo "ErroConfSenha";
            die();
        }
        if($dados['ConfSenha'] != $dados['senha']){
            echo "ErroSenhaNaoConfere";
            die();
        }
        echo "Sucesso";	
    }

    public function validarEdicaoFuncionarioresponsivo(){

        $dados =[
            'nome' => $this->input->post("NOME"),
            'email' => $this->input->post("EMAIL"),
            'cpf' => $this->input->post("CPF"),
            'senha' => $this->input->post("PASS"),
            'celular' => $this->input->post("CELULAR"),
            'ConfSenha' => $this->input->post("CONFPASS"),
            'Cargo' => $this->input->post("SELECIONARCARGO"),
        ];
        if(empty($dados['nome'])){
            echo "ErroNome";
            die();
        }
        if(empty($dados['cpf'])){
            echo "Errocpf";
            die();
        }
        if($dados['cpf'] <= 14){
            echo "CPfdeve11";
            die();
        }
        if(empty($dados['celular'])){
            echo "ErroCelular";
            die();
        }
        if(empty($dados['Cargo'])){
            echo "ErroCargo";
            die();
        }
        if(empty($dados['email'])){
            echo "ErroEmail";
            die();
        }
        if(empty($dados['senha'])){
            echo "ErroPass";
            die();
        }
        if(empty($dados['ConfSenha'])){
            echo "ErroConfSenha";
            die();
        }
        if($dados['ConfSenha'] != $dados['senha']){
            echo "ErroSenhaNaoConfere";
            die();
        }
        echo "Sucesso";	
    }

    public function excluirFuncionario(){
        echo "Excluir";
    }
}