<?php
 ini_set('display_startup_errors',1);
 ini_set('display_errors',1);
 error_reporting(E_ALL);
defined('BASEPATH') or exit('No direct script access allowed');

class Cardapio extends CI_Controller
{

    public function validarCadastroCardapio()
    {

        $nome = $_POST['nomeCardapio'];

        $this->load->model('CadastrosModel');

        if (empty($nome)) {
            die("ErroNomeCardapio");
        }

        /**img */
        $config["upload_path"] = FCPATH . "assets/img/cardapio";
        $config["allowed_types"] = "jpg|jpeg|gif|png";
        $config["encrypt_name"] = TRUE;

        $this->load->library("upload", $config);
        if($this->upload->do_upload('addFotoCardapio'))
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

        if ($this->CadastrosModel->CadastrarCardapio($nome, $nome_arquivo)) {
            echo "Sucesso";
            die();
        } else {
            echo "ErroBanco";
            die();
        }

    }

    public function validarCadastroCardapioresponsivo()
    {

        $nome = $_POST['NOMECARDAPIO'];

        $this->load->model('CadastrosModel');

        if (empty($nome)) {
            die("ErroNomeCardapio");
        }

        /**img */
        $config["upload_path"] = FCPATH . "assets/img/cardapio";
        $config["allowed_types"] = "jpg|jpeg|gif|png";
        $config["encrypt_name"] = TRUE;

        $this->load->library("upload", $config);
        if($this->upload->do_upload('addFotoCardapio'))
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

        if ($this->CadastrosModel->CadastrarCardapio($nome, $nome_arquivo)) {
            echo "Sucesso";
            die();
        } else {
            echo "ErroBanco";
            die();
        }

    }
}
