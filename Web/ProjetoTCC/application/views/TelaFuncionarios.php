<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo.png")?>" type="image/x-png"/>
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/estilo.css'); ?>" rel="stylesheet">
    <title>Funcionários</title>
</head>

<body>
    <div class="d-none d-md-block">
        <div class="container1 mt-4">
            <div class="row mx-auto">
                <h1 class="display-5 col-8 text-center my-auto" style=" position: relative; left: 260px; top: -10px;">Lista de Funcionários</h1>
                <form class="col-4" action="">
                    <input class="my-auto form-control bg-dark text-white" style="position: relative; left: 15px;" type="search" placeholder="Pesquisar">
                </form>
            </div>
            <table class="table table-dark table-hover text-center">
                <thead>
                    <tr class="text-danger">
                        <th scope="col">Nome</th>
                        <th scope="col">Cargo</th>
                        <th scope="col"><a class="text-danger badge badge-dark" href="#">Adicionar Funcionário</a></th>
                        <th scope="col"></th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col">Zezinho</th>
                        <th scope="col">Garçom</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Remover</th>
                    </tr>
                    <tr>
                        <th scope="col">Maria</th>
                        <th scope="col">Administrador</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Remover</th>
                    </tr>
                    <tr>
                        <th scope="col">José</th>
                        <th scope="col">Cozinheiro</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Remover</th>
                    </tr>
                    <tr>
                        <th scope="col">Rubens</th>
                        <th scope="col">Garçom</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Remover</th>
                    </tr>
                </tbody>
            </table>
        </div>
        <button class="mt-4 btn btn-lg btn-danger rounded mx-auto d-block"><a class="badge badge-danger" href="TelaADM.php">Voltar</a></button>
    </div>

    <div class="d-md-none d-sm-block">
        <div class="container2 mx-auto mt-4 table-responsive-sm">
            <div class="row mx-auto mt-2">
                <h1 class="display-5 col-12 text-center">Lista de Funcionários</h1>
                <form class="mx-auto mt-2 col-12" action="">
                    <input class="mx-auto bg-dark form-control" type="search" placeholder="Pesquisar">
                </form>
            </div>
            <table class="mt-2 table table-dark table-hover text-center">
                <thead>
                    <tr class="text-danger">
                        <th scope="col">Nome</th>
                        <th scope="col">Cargo</th>
                        <th scope="col"><a class="text-danger badge badge-dark" href="#">Adicionar Funcionário</a></th>
                        <th scope="col"></th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col">Zezinho</th>
                        <th scope="col">Garçom</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Remover</th>
                    </tr>
                    <tr>
                        <th scope="col">Maria</th>
                        <th scope="col">Administrador</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Remover</th>
                    </tr>
                    <tr>
                        <th scope="col">José</th>
                        <th scope="col">Cozinheiro</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Remover</th>
                    </tr>
                    <tr>
                        <th scope="col">Rubens</th>
                        <th scope="col">Garçom</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Remover</th>
                    </tr>
                </tbody>
            </table>
        </div>
        <button class="mt-4 btn btn-danger rounded mx-auto d-block"><a class="badge badge-danger" href="TelaADM.php">Voltar</a></button>
    </div>



    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js'); ?>"></script>
</body>

</html>