<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Itens extends CI_Controller
{

    public function validarCadastroItens()
    {

        $dados = [
            'cod_Cardapio' => $this->input->post('SELECIONARCARDAPIO'),
            'nome_Item' => $this->input->post('nomeItem'),
            'descricao_Item' => $this->input->post('descricao'),
            'preco_Item' => $this->input->post('preco'),
            /*'foto_Item' => $this->input->post('addFoto'),*/
        ];


        $this->load->model('CadastrosModel');

        if (empty($dados['nome_Item'])) {
            die("ErroNome");
        }

        if (empty($dados['descricao_Item'])) {
            die("ErroDescricao");
        }

        if (empty($dados['preco_Item'])) {
            die("ErroPreco");
        }

        if (empty($dados['cod_Cardapio'])) {
            die("ErroCardapio");
        }

        /**img */
        $config["upload_path"] = FCPATH . "assets/img/itens";
        $config["allowed_types"] = "jpg|jpeg|gif|png";
        $config["encrypt_name"] = TRUE;

        $this->load->library("upload", $config);
        if($this->upload->do_upload('addFoto'))
        {
            $info_arquivo = $this->upload->data();
            $nome_arquivo = $info_arquivo["file_name"];
        }else
        {
            $erros = $this->upload->display_errors();
            $alerta = array(
                "class" => "danger",
                "mensagem" => "ERRO.<br>". $erros
            );
        }

        if ($this->CadastrosModel->CadastrarItem($dados, $nome_arquivo)) {
            echo "Sucesso";
            die();
        } else {
            echo "ErroBanco";
            die();
        }

    }

    public function validarCadastroItensresponsivo()
    {

        $dados = [
            'Nome' => $this->input->post('NOMEITEM'),
            'Descricao' => $this->input->post('DESCRICAO'),
            'Preco' => $this->input->post('PRECO'),
            'AddFoto' => $this->input->post('ADDFOTO'),
        ];
        if (empty($dados['Nome'])) {
            echo "ErroNomeItem";
            die();
        }
        if (empty($dados['Descricao'])) {
            echo "ErroDescricao";
            die();
        }
        if (empty($dados['Preco'])) {
            echo "ErroPreco";
            die();
        }
        if (!is_numeric($dados['Preco'])) {
            die("Erroletra");
        }

        echo "Sucesso";
    }

    public function validarUpdateItens()
    {
        $dados = [
            'id_Item' => $this->input->post('id_item'),
            'NomeItem' => $this->input->post('nomeItem'),
            'Descricao' => $this->input->post('descricao'),
            'Preco' => $this->input->post('preco'),
            /*'AddFoto' => $this->input->post('addFoto'),*/
        ];

        $this->load->model('UpdateItemModel');

        if (empty($dados['NomeItem'])) {
            echo "ErroNomeItem";
            die();
        }

        if (empty($dados['Descricao'])) {
            echo "ErroDescricao";
            die();
        }

        if (empty($dados['Preco'])) {
            echo "ErroPreco";
            die();
        }

        if ($this->UpdateItemModel->atualizarItem($dados)){
            echo "Sucesso";
            die();
        } else {
            echo "ErroBanco";
            die();
        }
    }

    public function excluirItem()
    {
        $id = $this->input->post("id");

        $this->load->model('ExcluirItensModel');

        if ($this->ExcluirItensModel->excluirItens($id)) {
            echo "Excluir";
            die();
        } else {
            echo "ErroBanco";
            die();
        }
    }
}
