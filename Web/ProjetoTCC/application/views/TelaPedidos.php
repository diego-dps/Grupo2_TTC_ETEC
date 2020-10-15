<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo.png")?>" type="image/x-png"/>
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/estilo.css'); ?>" rel="stylesheet">
    <title>Lista de Pedidos</title>
</head>
<body>
    <div class="d-none d-md-block">
        <div class="container-fluid mt-4" style="background-color: white; border: solid white 15px; border-radius: 10px;">
            <h1 class="text-center display-5">Pedidos Pendentes</h1>
            <table class="table table-dark table-hover text-center">
                <thead>
                    <tr class="text-danger">
                        <th scope="col" class="alinhamentodetexto2">Codigo do Pedido</th>
                        <th scope="col">Mesa</th>
                        <th scope="col">Pedido</th>
                        <th scope="col">Observação</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Horário</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($pedido as $pedidos) : ?>
                    <tr>
                        <th scope="col"><?php echo $pedidos['cod_Pedido'] ?></th>
                        <th scope="col"><?php echo $pedidos['numero_Mesa'] ?></th>
                        <th scope="col" class="alinhamentodetexto"><?php echo $pedidos['nome_Item'] ?></th>
                        <th scope="col" class="alinhamentodetexto"><?php echo $pedidos['observacao_Pedido'] ?></th>
                        <th scope="col"><?php echo $pedidos['quantidade'] ?></th>
                        <th scope="col"><?php echo FormatarData($pedidos['horario_Pedido']) ?></th>
                        <th scope="col">Pronto</th>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
            <br>
        </div>
        <br>
    </div>

    <div class="d-md-none d-sm-block">
        <h1 class="text-center mt-4 display-5 text-white">Somente funcionários da cozinha podem acessar essa página :) !! </h1>
    </div>

    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js'); ?>"></script>
</body>

</html>