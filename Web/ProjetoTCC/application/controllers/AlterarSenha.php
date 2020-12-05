<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlterarSenha extends CI_Controller {

	public function validarAlterarSenha()
	{
        $NovaSenha = $this->input->post("NovaSenha");
        $ConfNovaSenha = $this->input->post("ConfNovaSenha");

        if(empty($NovaSenha)){
            echo "ErroNovaSenha";
            die();
        }

        if(empty($ConfNovaSenha)){
            echo "ErroConfNovaSenha";
            die();
        }

        if($ConfNovaSenha != $NovaSenha){
            echo "ErroSenhaNaoConfere";
            die();
        }

        echo "Sucesso";
    }
    
    public function validarAlterarSenhaResponsivo()
	{
        $NovaSenha = $this->input->post("NovaSenha");
        $ConfNovaSenha = $this->input->post("ConfNovaSenha");

        if(empty($NovaSenha)){
            echo "ErroNovaSenha";
            die();
        }

        if(empty($ConfNovaSenha)){
            echo "ErroConfNovaSenha";
            die();
        }

        if($ConfNovaSenha != $NovaSenha){
            echo "ErroSenhaNaoConfere";
            die();
        }

        echo "Sucesso";
    }
}