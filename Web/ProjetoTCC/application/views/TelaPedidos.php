<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/estilo.css'); ?>" rel="stylesheet">
    <title>Lista de Pedidos</title>
</head>

<body>
    <div class="d-none d-md-block">
        <div class="containerPedidos mt-4">
            <h1 class="text-center display-5">Pedidos Pendentes</h1>
            <table class="table table-dark table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col">Mesa</th>
                        <th scope="col">Pedido</th>
                        <th scope="col">Horário</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col">1</th>
                        <th scope="col">X-tega</th>
                        <th scope="col">12:00</th>
                        <th scope="col">Pronto</th>
                    </tr>
                    <tr>
                        <th scope="col">3</th>
                        <th scope="col">X-Bacon</th>
                        <th scope="col">12:05</th>
                        <th scope="col">Preparando</th>
                    </tr>
                </tbody>
            </table>
        </div>
        <button class="btn btn-lg btn-danger rounded mx-auto mt-4 d-block">Finalizar Pedido</button>
    </div>

    <div class="d-md-none d-sm-block">
        <h1 class="text-center text-white my-auto dislay-4 fontebranca">Somente funcionários da cozinha podem acessar essa página :) !! </h1>
    </div>



    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js'); ?>"></script>
</body>

</html>