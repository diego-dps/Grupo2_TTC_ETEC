<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cozinha</title>
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
                    <a href="<?php echo base_url('index.php/Welcome/telaPedidosCozinha'); ?>">
                        <i class="fa fa-2x"><img class="icones" src="<?php echo base_url('assets/img/contrato.png'); ?>"></i>
                        <span class="nav-text">Pedidos</span>
                    </a>  
                </li>
                <li>
                    <a href="<?php echo base_url('index.php/Welcome/telaCardapioCozinha'); ?>">
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
                    <a href="<?php echo base_url("index.php/Welcome/telaLogin"); ?>">
                        <i class="fa fa-2x"><img class="icones" src="<?php echo base_url('assets/img/logout.png'); ?>"></i>
                        <span class="nav-text">Logout</span>
                    </a>
                </li>  
            </ul>
        </nav>

        <div class="caixaCadastro mx-auto mt-5 font-weight-bold">
            <h2 class="text-center titulo">Cadastro</h2>

            <form action="<?php echo base_url("index.php/CadastroFuncionario/validarCadastroFuncionario"); ?>" method="POST" id="cadastroFuncionario" class="form-row">
                <div class="form-group mx-auto col-5">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" autocomplete="off">
                </div>
                <div class="form-group mx-auto col-5">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" autocomplete="off">
                </div>
                <div class="form-group mx-auto col-5">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf">
                </div>
                <div class="form-group mx-auto col-5">
                    <label for="pass">Senha</label>
                    <input type="password" class="form-control" id="pass" name="pass">
                </div>
                <div class="form-group mx-auto col-5">
                    <label for="tel">Celular</label>
                    <input type="text" class="form-control" id="celular" name="celular">
                </div>
                <div class="form-group mx-auto col-5">
                    <label for="ConfPass">Confirmar Senha</label>
                    <input type="password" class="form-control" id="ConfPass" name="ConfPass">
                </div>
                <div class="form-group col-5 ml-4 selecionarcargo">
                    <label class="selecionarcargo" for="SelecionarCargo">Selecionar Cargo</label>
                    <select class="form-control selecionarcargo" id="SelecionarCargo" name="SelecionarCargo">
                        <option></option>
                        <option>Administrador</option>
                        <option>Cozinheiro</option>
                        <option>Garçom</option>
                    </select>
                </div>
                <div class="form-row">
                    <div class="" style="position: relative; right: 35px; top: 21px;">
                        <button type="submit" class="btn btn-danger btn-lg btnCadastrar">Cadastrar</button>
                    </div>
                    <div class="" style="position: relative; right: 25px; top: 5px;">
                        <a class="btn btn-lg  btn-danger mx-auto d-block mt-3" href="<?php echo base_url('index.php/Welcome/telaFuncionarios');?>">Voltar</a></button>
                    </div>                       
                </div>
            </form>
        </div>
    </div>


    <div class="d-md-none d-sm-block">
        <nav class="fixed-top">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <img class="logo" src="<?php echo base_url('assets/img/logo.png'); ?>">
            <ul>
                <li><a href="<?php echo base_url("index.php/Welcome/index"); ?>">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Produtos</a></li>
                <li><a href="#">Vendas</a></li>
                <li><a href="#">Feedback</a></li>
            </ul>
        </nav>
        <br><br><br><br>
            <h1>Cadastro</h1>
    </div>
   
</body>
</html> 