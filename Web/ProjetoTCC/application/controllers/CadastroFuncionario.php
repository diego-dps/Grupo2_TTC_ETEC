<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastroFuncionario extends CI_Controller {

	public function validarCadastroFuncionario(){

        $nome = $this->input->post("nome");
        $email = $this->input->post("email");
        $cpf = $this->input->post("cpf");
        $senha = $this->input->post("pass");
        $celular = $this->input->post("celular");
        $ConfSenha = $this->input->post("ConfPass");
        $Cargo = $this->input->post("cargo");

        if(empty($nome)){
            echo "ErroNome";
            die();
        }

        if(empty($email)){
            echo "ErroEmail";
            die();
        }

        if(empty($cpf)){
            echo "Errocpf";
            die();
        }

        if(empty($senha)){
            echo "ErroPass";
            die();
        }

        if(empty($celular)){
            echo "ErroCelular";
            die();
        }

        if(empty($ConfSenha)){
            echo "ErroConfSenha";
            die();
        }

        if($ConfSenha != $senha){
            echo "ErroSenhaNaoConfere";
            die();
        }

        if($Cargo == "Selecione o cargo"){
            echo "ErroCargo";
            die();
        }

        echo "Sucesso";
		
	}
}