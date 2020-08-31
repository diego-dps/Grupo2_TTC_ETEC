<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Funcionário</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>

    <div class="d-none d-md-block">
        <div class="caixaCadastro mx-auto mt-5">
            <h2 class="font-weight-bold text-center titulo">Cadastro</h2>

            <form class="form-row mt-5">
                <div class="form-group mx-auto col-5">
                    <label for="nome" class="font-weight-bold">Nome</label>
                    <input type="text" class="form-control font-weight-bold" id="nome" name="nome">
                </div>
                <div class="form-group mx-auto col-5">
                    <label for="email" class="font-weight-bold">E-mail</label>
                    <input type="email" class="form-control font-weight-bold" id="email" name="email">
                </div>
                <div class="form-group mx-auto col-5">
                    <label for="cpf" class="font-weight-bold">CPF</label>
                    <input type="text" class="form-control font-weight-bold" id="cpf" name="cpf">
                </div>
                <div class="form-group mx-auto col-5">
                    <label for="pass" class="font-weight-bold">Senha</label>
                    <input type="password" class="form-control font-weight-bold" id="pass" name="pass">
                </div>
                <div class="form-group mx-auto col-5">
                    <label for="tel" class="font-weight-bold">Telefone</label>
                    <input type="text" class="form-control font-weight-bold" id="tel" name="tel">
                </div>
                <div class="form-group mx-auto col-5">
                    <label for="ConfPass" class="font-weight-bold">Confirmar Senha</label>
                    <input type="password" class="form-control font-weight-bold" id="ConfPass" name="ConfPass">
                </div>
                <div class="form-group col-5 ml-4">
                    <label for="SelecionarCargo" class="font-weight-bold">Selecionar Cargo</label>
                    <select class="form-control font-weight-bold" id="SelecionarCargo">
                        <option></option>
                        <option class="font-weight-bold">Administrador</option>
                        <option class="font-weight-bold">Cozinheiro</option>
                        <option class="font-weight-bold">Garçom</option>
                    </select>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn botaoCadastrar text-white col-12">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="d-md-none d-sm-block">
        <div class="caixaCadastroP mt-4">
            <h2 class="font-weight-bold text-center titulo">Cadastro</h2>
            <form class="form-row mt-2">
                <div class="form-group mx-auto col-12">
                    <label for="nome" class="font-weight-bold">Nome</label>
                    <input type="text" class="form-control font-weight-bold" id="nome" name="nome">
                </div>
                <div class="form-group mx-auto col-12">
                    <label for="email" class="font-weight-bold">E-mail</label>
                    <input type="email" class="form-control font-weight-bold" id="email" name="email">
                </div>
                <div class="form-group mx-auto col-12">
                    <label for="cpf" class="font-weight-bold">CPF</label>
                    <input type="text" class="form-control font-weight-bold" id="cpf" name="cpf">
                </div>
                <div class="form-group mx-auto col-12">
                    <label for="pass" class="font-weight-bold">Senha</label>
                    <input type="password" class="form-control font-weight-bold" id="pass" name="pass">
                </div>
                <div class="form-group mx-auto col-12">
                    <label for="tel" class="font-weight-bold">Telefone</label>
                    <input type="text" class="form-control font-weight-bold" id="tel" name="tel">
                </div>
                <div class="form-group mx-auto col-12">
                    <label for="ConfPass" class="font-weight-bold">Confirmar Senha</label>
                    <input type="password" class="form-control font-weight-bold" id="ConfPass" name="ConfPass">
                </div>
                <div class="form-group col-12">
                    <label for="SelecionarCargo" class="font-weight-bold">Selecionar Cargo</label>
                    <select class="form-control font-weight-bold" id="SelecionarCargo">
                        <option></option>
                        <option class="font-weight-bold">Administrador</option>
                        <option class="font-weight-bold">Cozinheiro</option>
                        <option class="font-weight-bold">Garçom</option>
                    </select>
                </div>
                    <button type="submit" class="btn btn-lg mt-3 botaoCadastrar text-white rounded 
                    mx-auto d-block">Cadastrar</button>
            </form>
        </div>
    </div>



    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>

</html>