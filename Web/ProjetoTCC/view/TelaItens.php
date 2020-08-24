<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Página Inicial</title>
</head>
<style>
    body {
        background-color: #345d7e;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: white;
    }

    .container {
        width: 90%;
        height: 450px;
        background-color: white;
        border: solid white 15px;
        border-radius: 10px;
    }

    .container2 {
        width: 95%;
        height: 450px;
        background-color: white;
        border: solid white 15px;
        border-radius: 10px;
    }

    .item {
        border: solid black 0.5px;
    }

    .input {
        width: 250px;
        height: 40px;
        background-color: white;
        color: black;
        border-radius: 25px;
    }

    .fonte {
        font-size: x-large;
        color: black;
    }

    .fontep {
        font-size: 10px;
        color: black;
    }

    .botao {
        width: 120px;
        height: 45px;
        background-color: #a64d79;
        color: white;
        border: solid white 2px;
        border-radius: 8px;
        font-size: x-large;
    }
</style>

<body>
    <div class="mt-2 d-none d-md-block">
        <div class="row mx-auto my-auto">
            <div class="col-6 my-auto">
                <h1 class="text-center display-4">Lista de Itens</h1>
            </div>
            <div class="col-4 mx-auto my-auto">
                <input class="ml-5 input" type="search" name="buscar" id="buscar" placeholder="Pesquisar">
            </div>
            <div class="col-2 mx-auto my-auto">
                <img class="ml-5" src="../img/icons8-plus-40.png" alt="">
            </div>
        </div>

        <div class="container mt-2 mx-auto my-auto">
            <div class="item row mx-auto">
                <div class="col-3">
                    <h1 class="text-center fonte">Nome</h1>
                    <h1 class="text-center fonte">Pizza Mussarela</h1>
                </div>
                <div class="col-3">
                    <h1 class="text-center fonte">Descrição</h1>
                    <h1 class="text-center fonte">Mussarela e Tomate</h1>
                </div>
                <div class="col-2">
                    <h1 class="text-center fonte">Preço</h1>
                    <h1 class="text-center fonte">R$ 32,00</h1>
                </div>
                <div class="col-2">
                    <h1 class="text-center fonte">Remover</h1>
                    <img class="rounded mx-auto d-block" src="../img/icone_lixeira26.png" alt="">
                </div>
                <div class="col-2">
                    <h1 class="text-center fonte">Editar</h1>
                    <img class="rounded mx-auto d-block" src="../img/icone_editar.png" alt="" width="26px" height="26px">
                </div>
            </div>
            <br>
            <div class="item row mx-auto">
                <div class="col-3">
                    <h1 class="text-center fonte">Nome</h1>
                    <h1 class="text-center fonte">Pizza Mussarela</h1>
                </div>
                <div class="col-3">
                    <h1 class="text-center fonte">Descrição</h1>
                    <h1 class="text-center fonte">Mussarela e Tomate</h1>
                </div>
                <div class="col-2">
                    <h1 class="text-center fonte">Preço</h1>
                    <h1 class="text-center fonte">R$ 32,00</h1>
                </div>
                <div class="col-2">
                    <h1 class="text-center fonte">Remover</h1>
                    <img class="rounded mx-auto d-block" src="../img/icone_lixeira26.png" alt="">
                </div>
                <div class="col-2">
                    <h1 class="text-center fonte">Editar</h1>
                    <img class="rounded mx-auto d-block" src="../img/icone_editar.png" alt="" width="26px" height="26px">
                </div>
            </div>
            <br>
        </div>
        <button type="button" class="rounded mx-auto d-block botao mt-5">Voltar</button>
    </div>
    <div class="mt-2 d-sm-block d-md-none">
        <h1 class="text-center display-5">Lista de Itens</h1>
        <div class="mt-4 row mx-auto">
            <input class="mx-auto input col-6" type="search" placeholder="Pesquisar">
            <img class="rounded mx-auto d-block" src="../img/icons8-plus-40.png" alt="">
        </div>
        <div class="container2 mt-2 mx-auto">
            <div class="item row mx-auto">
                <div class="col-3">
                    <h1 class="fontep">Nome</h1>
                    <h1 class="fontep">Pizza Mussarela</h1>
                </div>
                <div class="col-3">
                    <h1 class="fontep">Descrição</h1>
                    <h1 class="fontep">Mussarela e tomate</h1>
                </div>
                <div class="col-2">
                    <h1 class="fontep">Preço</h1>
                    <h1 class="fontep">R$ 32,00</h1>
                </div>
                <div class="my-auto col-2">
                    <h1 class="fontep">Remover</h1>
                </div>
                <div class="my-auto col-2">
                    <h1 class="fontep">Editar</h1>
                </div>
            </div><br>
            <div class="item row mx-auto">
                <div class="col-3">
                    <h1 class="fontep">Nome</h1>
                    <h1 class="fontep">Pizza Mussarela</h1>
                </div>
                <div class="col-3">
                    <h1 class="fontep">Descrição</h1>
                    <h1 class="fontep">Mussarela e tomate</h1>
                </div>
                <div class="col-2">
                    <h1 class="fontep">Preço</h1>
                    <h1 class="fontep">R$ 32,00</h1>
                </div>
                <div class="my-auto col-2">
                    <h1 class="fontep">Remover</h1>
                </div>
                <div class="my-auto col-2">
                    <h1 class="fontep">Editar</h1>
                </div>
            </div>
        </div>
        <button type="button" class="rounded mx-auto mb-2 d-block botao mt-4">Voltar</button>
    </div>

    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
</body>

</html>