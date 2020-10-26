<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function validarLogin(){

        $usuario = $this->input->post("user");
        $senha = $this->input->post("pass");

        if(empty($usuario)){
            echo "ErroUsuario";
            die();
        }

        if(empty($senha)){
            echo "ErroSenha";
            die();
        }

        $this->load->model('BuscarLoginModel');
        $resultado = $this->BuscarLoginModel->logarUsuario($usuario, $senha);
        
        /*var_dump($resultado);*/
        if(empty($resultado)){
            echo "FalhaLogin";
        }else{
            switch($resultado['cargo_Funcionario']){
                case 'Garçom':
                    echo "SucessoGarçom";
                    break;
                case 'Administrador':
                    echo "SucessoADM";
                    break;
                case 'Cozinheiro':
                    echo "SucessoCozinheiro";
                    break;
                default:
                    echo "ErroLogin";
                break;
            }
        }	
	}
}