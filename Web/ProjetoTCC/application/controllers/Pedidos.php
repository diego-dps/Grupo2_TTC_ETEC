<?php
 ini_set('display_startup_errors',1);
 ini_set('display_errors',1);
 error_reporting(E_ALL);
defined('BASEPATH') or exit('No direct script access allowed');

class Pedidos extends CI_Controller
{

    public function validarStatusPedido()
    {
        $id = $_POST['id'];
        $Status = $_POST['SelecionarStatus'];

        $this->load->model('CadastrosModel');
        
        if (empty($Status)) {
            die("ErroStatusVazio");
        }

        if ($this->CadastrosModel->alterarStatus($id, $Status)) {
            echo "Sucesso";
            die();
        } else {
            echo "ErroBanco";
            die();
        }
    }
}