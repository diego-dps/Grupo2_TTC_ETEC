<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Funcionário</title>
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/estilo.css'); ?>" rel="stylesheet">
</head>

<body>

    <div class="d-none d-md-block">
        <div class="caixaCadastro mx-auto mt-5 font-weight-bold">
            <h2 class="text-center titulo">Cadastro</h2>

            <form class="form-row mt-5">
                <div class="form-group mx-auto col-5">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="form-group mx-auto col-5">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email">
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
                    <label for="tel">Telefone</label>
                    <input type="text" class="form-control" id="tel" name="tel">
                </div>
                <div class="form-group mx-auto col-5">
                    <label for="ConfPass">Confirmar Senha</label>
                    <input type="password" class="form-control" id="ConfPass" name="ConfPass">
                </div>
                <div class="form-group col-5 ml-4">
                    <label for="SelecionarCargo">Selecionar Cargo</label>
                    <select class="form-control" id="SelecionarCargo">
                        <option></option>
                        <option>Administrador</option>
                        <option>Cozinheiro</option>
                        <option>Garçom</option>
                    </select>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-danger btn-lg btnCadastrar">Cadastrar</button>
                </div>
            </form>
        </div>
        <button class="mt-3 btn btn-lg btn-danger mx-auto d-block"><a href="TelaADM.php">Voltar</a></button>
    </div>

    <div class="d-md-none d-sm-block">
        <div class="caixaCadastroP mt-4 font-weight-bold">
            <h2 class="text-center titulo">Cadastro</h2>
            <form class="form-row mt-2">
                <div class="form-group mx-auto col-12">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="form-group mx-auto col-12">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group mx-auto col-12">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf">
                </div>
                <div class="form-group mx-auto col-12">
                    <label for="pass">Senha</label>
                    <input type="password" class="form-control" id="pass" name="pass">
                </div>
                <div class="form-group mx-auto col-12">
                    <label for="tel">Telefone</label>
                    <input type="text" class="form-control" id="tel" name="tel">
                </div>
                <div class="form-group mx-auto col-12">
                    <label for="ConfPass">Confirmar Senha</label>
                    <input type="password" class="form-control" id="ConfPass" name="ConfPass">
                </div>
                <div class="form-group col-12">
                    <label for="SelecionarCargo">Selecionar Cargo</label>
                    <select class="form-control" id="SelecionarCargo">
                        <option></option>
                        <option>Administrador</option>
                        <option>Cozinheiro</option>
                        <option>Garçom</option>
                    </select>
                </div>
                    <button type="submit" class="btn btn-lg mt-3 btn-danger text-white rounded 
                    mx-auto d-block">Cadastrar</button>
            </form>
        </div>
        <button class="mt-3 btn btn-lg btn-danger mx-auto d-block"><a href="TelaADM.php">Voltar</a></button>
    </div>



    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js'); ?>"></script>

</body>

</html>