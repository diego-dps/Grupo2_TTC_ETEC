<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RecuperaSenha extends CI_Controller {

	public function validarRecuperarSenha()
	{
        $email = $this->input->post("email");

        if(empty($email)){
            echo "ErroEmail";
            die();
        }
        $this->load->model('BuscarLoginModel');

        if ($this->BuscarLoginModel->verificar_dados($email)) {
            echo "Sucesso";
        } else {
            echo "ErroBanco";
            die();
        }
    }
    
}