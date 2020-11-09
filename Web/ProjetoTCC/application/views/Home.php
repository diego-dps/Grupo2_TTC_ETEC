<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo.png") ?>" type="image/x-png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/home.css'); ?>" rel="stylesheet">
    <title>Página Inicial</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark borda">
        <span class="navbar-brand mb-0 h1 logo"><a href="<?php echo base_url("index.php/Welcome/index"); ?>"><img class="respo" src="<?php echo base_url("assets/img/logo.png")?>" alt=""></a></span>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" href="#">Início</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="<?php echo base_url("index.php/Welcome/telaLogin"); ?>">Login</a>
            </li>
        </ul>
    </nav>
    <br>
    <div class="title mx-auto des">
        <h1 class="text-center text">BEM VINDO</h1>
        <h1 class="text-center text">A LOGISTICA DO SEU SOFTWARE</h1>
        <p class="text-center">Faça login e administre sua empresa</p>
    </div>
</body>
</html>