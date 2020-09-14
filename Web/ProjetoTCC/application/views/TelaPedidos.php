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
        <div class="container1 mt-4">
            <h1 class="text-center display-5">Pedidos Pendentes</h1>
            <table class="table table-dark table-hover text-center">
                <thead>
                    <tr class="text-danger">
                        <th scope="col">Mesa</th>
                        <th scope="col">Pedido</th>
                        <th scope="col">Horário</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col">1</th>
                        <th scope="col">Pizza Mussarela e Coca-cola 2l</th>
                        <th scope="col">12:00</th>
                        <th scope="col">Pronto</th>
                    </tr>
                    <tr>
                        <th scope="col">3</th>
                        <th scope="col">X-Bacon</th>
                        <th scope="col">12:05</th>
                        <th scope="col">Preparando</th>
                    </tr>
                    <tr>
                        <th scope="col">5</th>
                        <th scope="col">Baião de dois</th>
                        <th scope="col">12:17</th>
                        <th scope="col">Preparando</th>
                    </tr>
                    <tr>
                        <th scope="col">6</th>
                        <th scope="col">X-Salada</th>
                        <th scope="col">12:20</th>
                        <th scope="col">Pronto</th>
                    </tr>
                </tbody>
            </table>
        </div>
        <button class="btn btn-lg btn-danger rounded mx-auto mt-4 d-block">Finalizar Pedido</button>
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