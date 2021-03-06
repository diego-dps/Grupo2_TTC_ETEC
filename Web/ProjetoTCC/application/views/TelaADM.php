<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrador</title>
    <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo.png")?>" type="image/x-png"/>
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/estilo2.css'); ?>" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> 
</head>
<body>
    <div class="d-none d-md-block">
        <div class="area"></div>
        <nav class="main-menu">
            <ul>
                <li class="logo">
                    <img src="<?php echo base_url('assets/img/logo.png'); ?>">
                </li>
                <br>
                <li>
                    <a href="<?php echo base_url('index.php/Welcome/telaPedidos'); ?>">
                        <i class="fa fa-2x"><img class="icones" src="<?php echo base_url('assets/img/contrato.png'); ?>"></i>
                        <span class="nav-text">Pedidos</span>
                    </a>  
                </li>
                <li>
                    <a href="<?php echo base_url('index.php/Welcome/telaItens'); ?>">
                        <i class="fa fa-2x"><img class="icones" src="<?php echo base_url('assets/img/itens.png'); ?>"></i>
                        <span class="nav-text">Itens</span>
                    </a>  
                </li>
                <li>
                    <a href="<?php echo base_url('index.php/Welcome/telaFuncionarios'); ?>">
                        <i class="fa fa-2x"><img class="icones" src="<?php echo base_url('assets/img/funcionarios.png'); ?>"></i>
                        <span class="nav-text">Funcionários</span>
                    </a>  
                </li>
                <li>
                    <a href="<?php echo base_url('index.php/Welcome/telaCardapio'); ?>">
                        <i class="fa fa-2x"><img class="icones" src="<?php echo base_url('assets/img/cardapio.png'); ?>"></i>
                        <span class="nav-text">Cardápio</span>
                    </a>  
                </li>
                <li class="has-subnav">
                    <a href="#">
                        <i class="fa fa-2x"><img class="icones" src="<?php echo base_url('assets/img/config.png'); ?>"></i>
                        <span class="nav-text">Configurações</span>
                    </a>        
                </li>
            </ul>
            <ul class="logout">
                <li>
                    <a href="<?php echo base_url("index.php/Welcome/telaLogin"); ?>">
                        <i class="fa fa-2x"><img class="icones" src="<?php echo base_url('assets/img/logout.png'); ?>"></i>
                        <span class="nav-text">Logout</span>
                    </a>
                </li>  
            </ul>
        </nav>
    </div>


    <div class="d-md-none d-sm-block">
        <nav class="fixed-top">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <img class="logo" src="<?php echo base_url('assets/img/logo.png'); ?>">
            <ul>
                <li><a href="<?php echo base_url('index.php/Welcome/telaPedidos'); ?>">Pedidos</a></li>
                <li><a href="<?php echo base_url('index.php/Welcome/telaItens'); ?>">Itens</a></li>
                <li><a href="<?php echo base_url('index.php/Welcome/telaFuncionarios'); ?>">Funcionários</a></li>
                <li><a href="<?php echo base_url('index.php/Welcome/telaCardapio'); ?>">Cardápio</a></li>
                <li><a href="#">Configurações</a></li>
            </ul>
        </nav>
        <br><br><br><br>
            <h1>Cadastro</h1>
    </div>
   
    <div class="d-none d-md-block">
        <div class="container-fluid mt-4 sss" style="background-color: white; border: solid white 15px; border-radius: 10px;">
            <h1>
                <?php
                    date_default_timezone_set('America/Sao_Paulo');
                    /*Isto é para que consiga a hora da sua região*/

                    $hora_do_dia=date("H");

                    if ($hora_do_dia<6) echo 'Boa madrugada!';
                    elseif ($hora_do_dia<12) echo 'Bom dia!';
                    elseif ($hora_do_dia<18) echo 'Boa tarde!';
                    elseif ($hora_do_dia<24) echo 'Boa noite!';
                ?>
            </h1>
            <p style="border-top: 3px solid #000;"></p>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <?php foreach ($pendente as $pendentes) : ?>        
                                <p class="card-text">Pedidos Pendentes: <?php echo $pendentes['count(status_Pedido)'] ?></p>                      
                            <?php endforeach ?>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <button class="btn btn-sm btn-outline-primary" type="button">Ver</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <?php foreach ($concluido as $concluidos) : ?>
                                <p class="card-text">Pedidos Concluidos: <?php echo $concluidos['count(status_Pedido)'] ?></p>
                            <?php endforeach ?>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <button class="btn btn-sm btn-outline-primary" type="button">Ver</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <?php foreach ($entregue as $entregues) : ?>
                                <p class="card-text">Pedidos Entregues:<?php echo $entregues['count(status_Pedido)'] ?></p>
                            <?php endforeach ?>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <button class="btn btn-sm btn-outline-primary" type="button">Ver</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        <div>
    <div>
</body>
</html> 