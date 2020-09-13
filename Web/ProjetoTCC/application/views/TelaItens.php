<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/estilo.css'); ?>" rel="stylesheet">
    <title>Itens</title>
</head>

<body>

    <div class="d-none d-md-block">
        <div class="row mx-auto mt-2">
            <h1 class="display-4 col-6 text-center my-auto text-white d-none d-md-block">Lista de Itens</h1>
            <form class="my-auto col-4" action="">
                <input class="my-auto form-control" type="search" placeholder="Pesquisar">
            </form>
            <a href="#" class="col-1 mx-auto my-auto"> <img class="rounded mx-auto d-block" src="../img/icons8-plus-52.png" alt=""></a>
        </div>
    </div>

    <div class="d-md-none d-sm-block">
        <div class="row mx-auto mt-2">
            <h1 class="display-5 col-12 text-center my-auto text-white d-md-none d-sm-blok">Lista de Itens</h1>
            <form class="mx-auto my-auto col-9" action="">
                <input class="mx-auto my-auto form-control" type="search" placeholder="Pesquisar">
            </form>
            <a href="#" class="col-3 mx-auto my-auto"> <img class="rounded mx-auto d-block" src="../img/icons8-plus-52.png" alt=""></a>
        </div>
    </div>

    <div class="d-none d-md-block">
        <div class="container mx-auto mt-4">
        <table class="table table-dark table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Preço</th>
                        <th scope="col"></th>
                        <th scope="col"><a class="badge badge-dark" href="#">Adicionar Item</a></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col">Pizza Mussarela</th>
                        <th scope="col">Mussarela e Tomate</th>
                        <th scope="col">R$32,00</th>
                        <th scope="col">Remover</th>
                        <th scope="col">Editar</th>
                    </tr>
                    <tr>
                        <th scope="col">Pizza Mussarela</th>
                        <th scope="col">Mussarela e Tomate</th>
                        <th scope="col">R$32,00</th>
                        <th scope="col">Remover</th>
                        <th scope="col">Editar</th>
                    </tr>
                </tbody>
            </table>
        </div>
        <button class="mt-4 btn btn-lg btn-danger rounded mx-auto d-block"><a class="badge badge-danger" href="TelaADM.php">Voltar</a></button>
    </div>

    <div class="d-md-none d-sm-block">
        <div class="container2 mx-auto mt-4 table-responsive-sm">
        <table class="table table-dark table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Preço</th>
                        <th scope="col"></th>
                        <th scope="col"><a class="badge badge-dark" href="#">Adicionar Item</a></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col">Pizza Mussarela</th>
                        <th scope="col">Mussarela e Tomate</th>
                        <th scope="col">R$32,00</th>
                        <th scope="col">Remover</th>
                        <th scope="col">Editar</th>
                    </tr>
                    <tr>
                        <th scope="col">Pizza Mussarela</th>
                        <th scope="col">Mussarela e Tomate</th>
                        <th scope="col">R$32,00</th>
                        <th scope="col">Remover</th>
                        <th scope="col">Editar</th>
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