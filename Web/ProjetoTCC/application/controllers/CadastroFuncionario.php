<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CadastroFuncionario extends CI_Controller
{

    public function validarCadastroFuncionario()
    {

        $dados = [
            'nome_Funcionario' => $this->input->post("nome"),
            'email_Funcionario' => $this->input->post("email"),
            'cpf_Funcionario' => $this->input->post("cpf"),
            'senha' => $this->input->post("pass"),
            'telefone_Funcionario' => $this->input->post("celular"),
            'cargo_Funcionario' => $this->input->post("SelecionarCargo"),
        ];

        $ConfSenha = $this->input->post("ConfPass");

        $this->load->model('CadastrosModel');

        if (empty($dados['nome_Funcionario'])) {
            echo "ErroNome";
            die();
        }

        if (empty($dados['cpf_Funcionario'])) {
            echo "Errocpf";
            die();
        }

        if (strlen($dados['cpf_Funcionario']) != 14) {
            echo "CPfdeve11";
            die();
        }

        if (empty($dados['telefone_Funcionario'])) {
            echo "ErroCelular";
            die();
        }

        if (empty($dados['cargo_Funcionario'])) {
            echo "ErroCargo";
            die();
        }

        if (empty($dados['email_Funcionario'])) {
            echo "ErroEmail";
            die();
        }

        if (empty($dados['senha'])) {
            echo "ErroPass";
            die();
        }

        if (empty($ConfSenha)) {
            echo "ErroConfSenha";
            die();
        }

        if ($ConfSenha != $dados['senha']) {
            echo "ErroSenhaNaoConfere";
            die();
        }

        if ($this->CadastrosModel->CadastrarFuncionario($dados)) {
            echo "Sucesso";
            die();
        } else {
            echo "ErroBanco";
            die();
        }
    }

    public function validarCadastroFuncionarioresponsivo()
    {
        $dados = [
            'nome_Funcionario' => $this->input->post("NOME"),
            'email_Funcionario' => $this->input->post("EMAIL"),
            'cpf_Funcionario' => $this->input->post("CPF"),
            'senha' => $this->input->post("PASS"),
            'telefone_Funcionario' => $this->input->post("CELULAR"),
            'cargo_Funcionario' => $this->input->post("SELECIONARCARGO"),
        ];

        $ConfSenha = $this->input->post("CONFPASS");

        $this->load->model('CadastrosModel');

        if (empty($dados['nome_Funcionario'])) {
            echo "ErroNome";
            die();
        }
        if (empty($dados['email_Funcionario'])) {
            echo "ErroEmail";
            die();
        }
        if (empty($dados['cpf_Funcionario'])) {
            echo "Errocpf";
            die();
        }
        if (strlen($dados['cpf_Funcionario']) != 14) {
            echo "CPfdeve11";
            die();
        }
        if (empty($dados['telefone_Funcionario'])) {
            echo "ErroCelular";
            die();
        }
        if (empty($dados['cargo_Funcionario'])) {
            echo "ErroCargo";
            die();
        }
        if (empty($dados['senha'])) {
            echo "ErroPass";
            die();
        }
        if (empty($ConfSenha)) {
            echo "ErroConfSenha";
            die();
        }
        if ($ConfSenha != $dados['senha']) {
            echo "ErroSenhaNaoConfere";
            die();
        }
        if ($this->CadastrosModel->CadastrarFuncionario($dados)) {
            echo "Sucesso";
            die();
        } else {
            echo "ErroBanco";
            die();
        }
    }

    public function validarEdicaoFuncionario()
    {

        $dados = [
            'nome' => $this->input->post("nome"),
            'email' => $this->input->post("email"),
            'cpf' => $this->input->post("cpf"),
            'senha' => $this->input->post("pass"),
            'celular' => $this->input->post("celular"),
            'ConfSenha' => $this->input->post("ConfPass"),
            'Cargo' => $this->input->post("SelecionarCargo"),
        ];
        if (empty($dados['nome'])) {
            echo "ErroNome";
            die();
        }
        if (empty($dados['cpf'])) {
            echo "Errocpf";
            die();
        }
        if ($dados['cpf'] <= 14) {
            echo "CPfdeve11";
            die();
        }
        if (empty($dados['celular'])) {
            echo "ErroCelular";
            die();
        }
        if (empty($dados['Cargo'])) {
            echo "ErroCargo";
            die();
        }
        if (empty($dados['email'])) {
            echo "ErroEmail";
            die();
        }
        if (empty($dados['senha'])) {
            echo "ErroPass";
            die();
        }
        if (empty($dados['ConfSenha'])) {
            echo "ErroConfSenha";
            die();
        }
        if ($dados['ConfSenha'] != $dados['senha']) {
            echo "ErroSenhaNaoConfere";
            die();
        }
    }

    public function validarEdicaoFuncionarioresponsivo()
    {

        $dados = [
            'nome' => $this->input->post("NOME"),
            'email' => $this->input->post("EMAIL"),
            'cpf' => $this->input->post("CPF"),
            'senha' => $this->input->post("PASS"),
            'celular' => $this->input->post("CELULAR"),
            'ConfSenha' => $this->input->post("CONFPASS"),
            'Cargo' => $this->input->post("SELECIONARCARGO"),
        ];
        if (empty($dados['nome'])) {
            echo "ErroNome";
            die();
        }
        if (empty($dados['cpf'])) {
            echo "Errocpf";
            die();
        }
        if ($dados['cpf'] <= 14) {
            echo "CPfdeve11";
            die();
        }
        if (empty($dados['celular'])) {
            echo "ErroCelular";
            die();
        }
        if (empty($dados['Cargo'])) {
            echo "ErroCargo";
            die();
        }
        if (empty($dados['email'])) {
            echo "ErroEmail";
            die();
        }
        if (empty($dados['senha'])) {
            echo "ErroPass";
            die();
        }
        if (empty($dados['ConfSenha'])) {
            echo "ErroConfSenha";
            die();
        }
        if ($dados['ConfSenha'] != $dados['senha']) {
            echo "ErroSenhaNaoConfere";
            die();
        }
        echo "Sucesso";
    }

    public function excluirFuncionario()
    {
        echo "Excluir";
    }
}
