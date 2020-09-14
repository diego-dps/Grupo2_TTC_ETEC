<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo.png")?>" type="image/x-png"/>
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/estilo.css'); ?>" rel="stylesheet">
    <title>Cadastro de Itens</title>
</head>

<body>
    <div class="d-none d-md-block">
        <h1 class="text-center display-3 text-white">Cadastrar Item</h1>
        <div class="containerform mx-auto mt-2">
            <form class="form-row mt-2">
                <div class="form-group col-8">
                    <label for="nomeItem">Nome do Item</label>
                    <input type="email" class="form-control" id="nomeItem">
                </div>
                <div class="form-group col-12">
                    <label for="descricao">Descrição</label>
                    <textarea type="text" class="form-control" id="descricao" rows="3"></textarea>
                </div>
                <div class="form-group col-3">
                    <label for="preco">Preço</label>
                    <input type="number" class="form-control" id="preco">
                </div>
                <div class="form-group col-9">
                    <label for="addFoto">Adicionar foto</label>
                    <input type="file" class="form-control" id="addFoto">
                </div>
                <button type="submit" class="mt-2 btn btn-lg btn-danger rounded mx-auto d-block">Cadastrar</button>
            </form>
        </div>
        <button class="mt-3 btn btn-lg btn-danger rounded mx-auto d-block"><a class="" href="TelaADM.php">Voltar</a></button>
    </div>

    <div class="d-md-none d-sm-block">
        <h1 class="text-center display-5 text-white">Cadastrar Item</h1>
        <div class="containerformp mx-auto mt-2">
            <form class="form-row mt-2">
                <div class="form-group col-12">
                    <label for="nomeItem">Nome do Item</label>
                    <input type="email" class="form-control" id="nomeItem">
                </div>
                <div class="form-group col-12">
                    <label for="descricao">Descrição</label>
                    <textarea type="text" class="form-control" id="descricao" rows="3"></textarea>
                </div>
                <div class="form-group col-4">
                    <label for="preco">Preço</label>
                    <input type="number" class="form-control" id="preco">
                </div>
                <div class="form-group col-12">
                    <label for="addFoto">Adicionar foto</label>
                    <input type="file" class="form-control" id="addFoto">
                </div>
                <button type="submit" class="mt-2 btn btn-lg btn-danger rounded mx-auto d-block">Cadastrar</button>
            </form>
        </div>
        <button class="mt-3 btn btn-danger rounded mx-auto d-block text-white"><a class="" href="TelaADM.php">Voltar</a></button>
    </div>


    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js'); ?>"></script>
</body>

</html>