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
                        <span class="nav-text">Funcionarios</span>
                    </a>  
                </li>
                <li>
                    <a href="<?php echo base_url('index.php/Welcome/telaCardapio'); ?>">
                        <i class="fa fa-2x"><img class="icones" src="<?php echo base_url('assets/img/cardapio.png'); ?>"></i>
                        <span class="nav-text">Cardapio</span>
                    </a>  
                </li>
                <li class="has-subnav">
                    <a href="#">
                        <i class="fa fa-2x"><img class="icones" src="<?php echo base_url('assets/img/config.png'); ?>"></i>
                        <span class="nav-text">Cofigurações</span>
                    </a>        
                </li>
            </ul>
            <ul class="logout">
                <li>
                    <a href="#">
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
                <li><a href="<?php echo base_url('index.php/Welcome/telaFuncionarios'); ?>">Funcionarios</a></li>
                <li><a href="<?php echo base_url('index.php/Welcome/telaCardapio'); ?>">Cardapio</a></li>
                <li><a href="#">Cofigurações</a></li>
            </ul>
        </nav>
        <br><br><br><br>
            <h1>Cadastro</h1>
    </div>
   
</body>
</html> 