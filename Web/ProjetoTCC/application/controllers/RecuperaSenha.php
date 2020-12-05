<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RecuperaSenha extends CI_Controller {

	public function validarRecuperarSenha()
	{
        
        $email = $this->input->post("email");

        $this->load->model('BuscarLoginModel');
        
        if (empty($email)) {
            echo "ErroEmail";
            die();
        }
        
        $resultado = $this->BuscarLoginModel->verificar_dados($email);
        
        if (empty($resultado)) {
            echo "FalhaLogin";
        }else{

            if($resultado > 0){

                $config['smtp_host'] = 'ssl://smtp.gmail.com';
                $config['smtp_port'] = 587;
                $config['smtp_user'] = 'gerenciadorderestaurantetcc@gmail.com';
                $config['smtp_pass'] = 'etecds123';
                $config['protocol'] = 'mail';
                $config['validate'] = TRUE;
                $config['mailtype'] = 'html';
                $config['charset'] = 'utf-8';
                $config['newline'] = "\r\n";

                $this->load->library('email', $config);

                $this->email->from('gerenciadorderestaurantetcc@gmail.com', 'ALSS');
                $this->email->to($email);
                $this->email->subject('Recuperação de Senha');
                $this->email->message("Teste");
                if ($this->email->send()) {
                    echo "Sucesso";
                }
                else {
                    print_r($this->email->print_debugger());
                }


            }else{
                echo "ERRo";
            }
        }
        
        /*$config['smtp_host'] = 'ssl://smtp.gmail.com';
            $config['smtp_port'] = '465';
            $config['smtp_user'] = 'gerenciadorderestaurantetcc@gmail.com';
            $config['smtp_pass'] = 'etecds123';
            $config['protocol'] = 'mail';
            $config['validate'] = TRUE;
            $config['mailtype'] = 'html';
            $config['charset'] = 'utf-8';
            $config['newline'] = "\r\n";


          $this->load->library('email', $config);

          $this->email->from('gerenciadorderestaurantetcc@gmail.com', 'ALSS');
          $this->email->to('caio.goncalves@aluno.faculdadeimpacta.com.br');
          $this->email->subject('Recuperação de Senha');
          $this->email->message("Teste");
          if ($this->email->send()) {
              echo "Sucesso";
          }
          else {
              print_r($this->email->print_debugger());
          }*/
    }
    
}