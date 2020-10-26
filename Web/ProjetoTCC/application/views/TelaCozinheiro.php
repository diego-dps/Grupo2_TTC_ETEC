<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cozinha</title>
    <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo.png")?>" type="image/x-png"/>
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/estilo.css'); ?>" rel="stylesheet">
    <style>
    /**Pagina em manutenção */
    h1{
        text-align: center;
        color: white;
    }
    </style>
</head>
<body>
    <div class="mt-2 d-none d-md-block">
        <a class="ml-2 mr-auto btn btn-danger btn-lg" href="<?php echo base_url('index.php/Welcome/index'); ?>">Sair</a>
        <br><br><br><br><br>
        <h1>!!!Pagina Em Manuteção!!!</h1>
        <br><br>
        <div class="row mx-auto">
            <div class="tamanhobotao mx-auto col-4">
                <a class="btn btn-danger btn-lg btn-block rounded mx-auto d-block col-5" style="position: relative; left: 10px;" href="<?php echo base_url('index.php/Welcome/telaPedidos'); ?>">Pedidos Pendentes</a>
            </div>
        </div>
    </div>

</body>
</html>