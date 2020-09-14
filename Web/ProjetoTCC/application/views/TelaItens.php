<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo.png")?>" type="image/x-png"/>
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/estilo.css'); ?>" rel="stylesheet">
    <title>Itens</title>
</head>

<body>

    <div class="d-none d-md-block">
        <div class="container1 mx-auto mt-4">
            <div class="row mx-auto mt-2">
                <h1 class="my-auto display-5 text-center col-8" style=" position: relative; left: 265px; top: -10px;">Lista de Itens</h1>
                <form class="col-4" action="">
                    <input class="my-auto form-control bg-dark text-white" style="position: relative; left: 15px;" type="search" placeholder="Pesquisar">
                </form>
            </div>
            <table class="table table-dark table-hover text-center">
                <thead>
                    <tr class="text-danger">
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Preço</th>
                        <th scope="col"><a class="text-danger badge badge-dark" href="#">Adicionar Item</a></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col">Pizza Mussarela</th>
                        <th scope="col">Mussarela e Tomate</th>
                        <th scope="col">R$32,00</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Remover</th>
                    </tr>
                    <tr>
                        <th scope="col">Pizza Calabresa</th>
                        <th scope="col">Calabresa e Cebola</th>
                        <th scope="col">R$34,00</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Remover</th>
                    </tr>
                    <tr>
                        <th scope="col">Coca-cola</th>
                        <th scope="col">Coca-cola 2l</th>
                        <th scope="col">R$9,00</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Remover</th>
                    </tr>
                    <tr>
                        <th scope="col">Fanta Laranja</th>
                        <th scope="col">Fanta Laranja 350ml</th>
                        <th scope="col">R$4,00</th>
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
                <h1 class="display-5 col-12 text-center my-auto">Lista de Itens</h1>
                <form class="mx-auto my-auto col-12" action="">
                    <input class="mx-auto bg-dark form-control" type="search" placeholder="Pesquisar">
                </form>
            </div>
            <table class="mt-2 table table-dark table-hover text-center">
                <thead>
                    <tr class="text-danger">
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Preço</th>
                        <th scope="col"><a class="text-danger badge badge-dark" href="#">Adicionar Item</a></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col">Pizza Mussarela</th>
                        <th scope="col">Mussarela e Tomate</th>
                        <th scope="col">R$32,00</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Remover</th>
                    </tr>
                    <tr>
                        <th scope="col">Pizza Calabresa</th>
                        <th scope="col">Calabresa e Cebola</th>
                        <th scope="col">R$34,00</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Remover</th>
                    </tr>
                    <tr>
                        <th scope="col">Coca-cola</th>
                        <th scope="col">Coca-cola 2l</th>
                        <th scope="col">R$9,00</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Remover</th>
                    </tr>
                    <tr>
                        <th scope="col">Fanta Laranja</th>
                        <th scope="col">Fanta Laranja 350ml</th>
                        <th scope="col">R$4,00</th>
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