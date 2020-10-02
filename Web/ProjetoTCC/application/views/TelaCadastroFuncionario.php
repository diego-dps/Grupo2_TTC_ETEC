<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Funcionário</title>
    <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo.png")?>" type="image/x-png"/>
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/estilo.css'); ?>" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#cpf").mask("000.000.000-00", {reverse: false})
            $("#CPF").mask("000.000.000-00", {reverse: false})
            $("#celular").mask("(00) 00000-0000")
            $("#CELULAR").mask("(00) 00000-0000")
        });
    </script>
</head>

<body>

    <div class="d-none d-md-block">
        <div class="caixaCadastro mx-auto mt-5 font-weight-bold">
            <h2 class="text-center titulo">Cadastro</h2>

            <form action="<?php echo base_url("index.php/CadastroFuncionario/validarCadastroFuncionario"); ?>" method="POST" id="cadastroFuncionario" class="form-row">
                <div class="form-group mx-auto col-5">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" autocomplete="off">
                </div>
                <div class="form-group mx-auto col-5">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" autocomplete="off">
                </div>
                <div class="form-group mx-auto col-5">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf">
                </div>
                <div class="form-group mx-auto col-5">
                    <label for="pass">Senha</label>
                    <input type="password" class="form-control" id="pass" name="pass">
                </div>
                <div class="form-group mx-auto col-5">
                    <label for="tel">Celular</label>
                    <input type="text" class="form-control" id="celular" name="celular">
                </div>
                <div class="form-group mx-auto col-5">
                    <label for="ConfPass">Confirmar Senha</label>
                    <input type="password" class="form-control" id="ConfPass" name="ConfPass">
                </div>
                <div class="form-group col-5 ml-4 selecionarcargo">
                    <label class="selecionarcargo" for="SelecionarCargo">Selecionar Cargo</label>
                    <select class="form-control selecionarcargo" id="SelecionarCargo" name="SelecionarCargo">
                        <option></option>
                        <option>Administrador</option>
                        <option>Cozinheiro</option>
                        <option>Garçom</option>
                    </select>
                </div>
                <div class="form-row">
                    <div class="" style="position: relative; right: 35px; top: 21px;">
                        <button type="submit" class="btn btn-danger btn-lg btnCadastrar">Cadastrar</button>
                    </div>
                    <div class="" style="position: relative; right: 25px; top: 5px;">
                        <a class="btn btn-lg  btn-danger mx-auto d-block mt-3" href="<?php echo base_url('index.php/Telas/telaFuncionarios');?>">Voltar</a></button>
                    </div>                       
                </div>
            </form>
        </div>
    </div>

    <div class="d-md-none d-sm-block">
        <div class="caixaCadastroP mt-4 font-weight-bold">
            <h2 class="text-center titulo">Cadastro</h2>
            <form class="form-row mt-2" action="<?php echo base_url("index.php/CadastroFuncionario/validarCadastroFuncionarioresponsivo"); ?>" method="POST" id="cadastroFuncionarioresponsivo">
                <div class="form-group mx-auto col-12">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="NOME" name="NOME" autocomplete="off">
                </div>
                <div class="form-group mx-auto col-12">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="EMAIL" name="EMAIL" autocomplete="off">
                </div>
                <div class="form-group mx-auto col-12">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="CPF" name="CPF">
                </div>
                <div class="form-group mx-auto col-12">
                    <label for="tel">Celular</label>
                    <input type="text" class="form-control" id="CELULAR" name="CELULAR">
                </div>
                <div class="form-group col-12">
                    <label for="SelecionarCargo">Selecionar Cargo</label>
                    <select class="form-control" id="SELECIONARCARGO" name="SELECIONARCARGO">
                        <option></option>
                        <option>Administrador</option>
                        <option>Cozinheiro</option>
                        <option>Garçom</option>
                    </select>
                </div>
                <div class="form-group mx-auto col-12">
                    <label for="pass">Senha</label>
                    <input type="password" class="form-control" id="PASS" name="PASS">
                </div>
                <div class="form-group mx-auto col-12">
                    <label for="ConfPass">Confirmar Senha</label>
                    <input type="password" class="form-control" id="CONFPASS" name="CONFPASS">
                </div>
                <button type="submit" class="btn btn-lg mt-3 btn-danger text-white rounded mx-auto d-block">Cadastrar</button>
                <a class="btn btn-lg  btn-danger mx-auto d-block mt-3 col-4" href="<?php echo base_url('index.php/Telas/telaFuncionarios');?>">Voltar</a></button>
            </form>
        </div>
    </div>



    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/node_modules/jquery/dist/jquery.mask.min.js"); ?>"></script>
    <script src="<?php echo base_url('assets/javascript/validacoes.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js'); ?>"></script>

</body>

</html>