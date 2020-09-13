<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Senha</title>
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/estilo.css'); ?>" rel="stylesheet">
</head>

<body>

    <div class="mt-5 d-none d-md-block">
        <div class="caixaLogin mx-auto mt-5">
            <h2 class="font-weight-bold text-center titulo">Alterar Senha</h2>
            <form>
                <div class="mt-4">
                    <div class="form-group mx-auto col-10">
                        <label for="SenhaAtual" class="font-weight-bold">Senha Atual</label>
                        <input type="text" class="form-control font-weight-bold" id="SenhaAtual" name="SenhaAtual">
                    </div>
                    <div class="form-group mx-auto col-10">
                        <label for="NovaSenha" class="font-weight-bold">Nova Senha</label>
                        <input type="text" class="form-control font-weight-bold" id="NovaSenha" name="NovaSenha">
                    </div>
                    <div class="form-group mx-auto col-10">
                        <label for="ConfNovaSenha" class="font-weight-bold">Confirmar Nova Senha</label>
                        <input type="text" class="form-control font-weight-bold" id="ConfNovaSenha" name="ConfNovaSenha">
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-lg btn-danger btnOK text-white">OK</button>
                    </div>
                </div>
            </form>
        </div>
        <button class="mt-3 btn btn-lg btn-danger mx-auto d-block"><a href="TelaADM.php">Voltar</a></button>
    </div>

    <div class="d-md-none d-sm-block">
        <div class="caixaLoginP mt-4">
            <h2 class="font-weight-bold text-center titulo">Alterar Senha</h2>
            <form>
                <div class="mt-4">
                    <div class="form-group mx-auto col-12">
                        <label for="SenhaAtual" class="font-weight-bold">Senha Atual</label>
                        <input type="text" class="form-control font-weight-bold" id="SenhaAtual" name="SenhaAtual">
                    </div>
                    <div class="form-group mx-auto col-12">
                        <label for="NovaSenha" class="font-weight-bold">Nova Senha</label>
                        <input type="text" class="form-control font-weight-bold" id="NovaSenha" name="NovaSenha">
                    </div>
                    <div class="form-group mx-auto col-12">
                        <label for="ConfNovaSenha" class="font-weight-bold">Confirmar Nova Senha</label>
                        <input type="text" class="form-control font-weight-bold" id="ConfNovaSenha" name="ConfNovaSenha">
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-lg btn-danger btnOK text-white">OK</button>
                    </div>
                </div>
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