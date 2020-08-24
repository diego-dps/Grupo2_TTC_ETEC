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
    a:link {
  color: white;
}

a:visited {
  color: white;
}


a:hover {
  color: white;
}

a:active {
  color: white;
}
</style>

<body>
    <div class="mt-5 d-none d-md-block">
        <div class="row mx-auto my-auto">
            <div class="mt-4 col-6">
                <h1 class="text-center display-4">Nome do Usuário</h1>
            </div>
            <div class="col-6">
                <h1 class="display-4">20 de Agosto de 2020</>
                    <h1 class="display-4">Quinta-feira 16:00</h1>
            </div>
        </div>
        <br><br><br>
        <div class="mt-5 row mx-auto">
            <div class="col-4">
                <h1 class="text-center display-4">Itens</h1>
                <img class="mt-5 rounded mx-auto d-block" src="../img/icone_itens.png" alt="" width="120px" height="120px">
            </div>
            <div class="col-4">
                <h1 class="text-center display-4">Funcionários</h1>
                <img class="mt-5 rounded mx-auto d-block" src="../img/icone_funcionarios.png" alt="" width="120px" height="120px">
            </div>
            <div class="mr-0 col-4">
                <h1 class="text-center display-4">Configurações</h1>
                <img class="mt-5 rounded mx-auto d-block" src="../img/icone_config.png" alt="" width="120px" height="120px">
            </div>
        </div>
    </div>
    <div class="mt-5 d-sm-block d-md-none">
        <h1 class="text-center display-5">Nome do Usuário</h1>
        <div class="mt-4">
            <a href="#">
                <h1 class="text-center display-5">Itens</h1>
                <img class="rounded mx-auto d-block" src="../img/icone_itens.png" alt="" width="120px" height="120px">
            </a>

        </div>
        <div class="mt-4">
            <a href="#">
                <h1 class="text-center display-5">Funcionários</h1>
                <img class="rounded mx-auto d-block" src="../img/icone_funcionarios.png" alt="" width="120px" height="120px">
            </a>

        </div>
        <div class="mt-4 mb-4">
            <a href="#">
                <h1 class="text-center display-5">Configurações</h1>
                <img class="rounded mx-auto d-block" src="../img/icone_config.png" alt="" width="120px" height="120px">
            </a>

        </div>
    </div>


    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
</body>

</html>