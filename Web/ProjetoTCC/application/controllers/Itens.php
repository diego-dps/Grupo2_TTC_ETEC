<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Itens extends CI_Controller {

    public function validarCadastroItens(){

        $dados = [
            'Nome' => $this->input->post('nomeItem'),
            'Descricao' => $this->input->post('descricao'),
            'Preco' => $this->input->post('preco'),
            'AddFoto' => $this->input->post('addFoto'),
        ];

        if(empty($dados['Nome'])){
            die("ErroNome");
        }

        if(empty($dados['Descricao'])){
            die("ErroDescricao");
        }

        if(empty($dados['Preco'])){
            die("ErroPreco");
        }

        echo "Sucesso";

    }

    public function validarCadastroItensresponsivo(){
        
        $dados = [
            'Nome' => $this->input->post('NOMEITEM'),
            'Descricao' => $this->input->post('DESCRICAO'),
            'Preco' => $this->input->post('PRECO'),
            'AddFoto' => $this->input->post('ADDFOTO'),
        ];
        if(empty($dados['Nome'])){
            echo "ErroNomeItem";
            die();
        }
        if(empty($dados['Descricao'])){
            echo "ErroDescricao";
            die();
        }
        if(empty($dados['Preco'])){
            echo "ErroPreco";
            die();
        }
        if(!is_numeric($dados['Preco'])){
            die("Erroletra");
        }

        echo "Sucesso";
    }

	public function validarUpdateItens(){
        
        $dados = [
            'NomeItem' => $this->input->post('nomeItem'),
            'Descricao' => $this->input->post('descricao'),
            'Preco' => $this->input->post('preco'),
            'AddFoto' => $this->input->post('addFoto'),
        ];

        if(empty($dados['NomeItem'])){
            echo "ErroNomeItem";
            die();
        }

        if(empty($dados['Descricao'])){
            echo "ErroDescricao";
            die();
        }

        if(empty($dados['Preco'])){
            echo "ErroPreco";
            die();
        }

        if(!is_numeric($dados['Preco'])){
            die("Erroletra");
        }

        echo "Sucesso";
    }
    
    public function excluirItem(){

        echo "Excluir";
    }
}
?>