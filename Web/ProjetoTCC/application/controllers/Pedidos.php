<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pedidos extends CI_Controller
{

    public function validarStatusPedido()
    {
        $id = $_POST['id'];
        $Status = $_POST['SelecionarStatus'];

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