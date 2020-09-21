<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Senha</title>
    <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo.png")?>" type="image/x-png"/>
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/estilo.css'); ?>" rel="stylesheet">
</head>

<body>

    <div class="mt-5 d-none d-md-block">
        <div class="caixaLogin mx-auto mt-5">
        <br><br>
            <h2 class="font-weight-bold text-center titulo">Alterar Senha</h2>
            <form action="<?php echo base_url("index.php/AlterarSenha/validarAlterarSenha"); ?>" method="POST" id="AlterarSenha">
                <div class="mt-4">
                    <div class="form-group mx-auto col-10">
                        <label class="font-weight-bold">Nova Senha</label>
                        <input type="text" class="form-control" autocomplete="off" id="NovaSenha" name="NovaSenha">
                    </div>
                    <div class="form-group mx-auto col-10">
                        <label for="ConfNovaSenha" class="font-weight-bold">Confirmar Nova Senha</label>
                        <input type="text" class="form-control" id="ConfNovaSenha" autocomplete="off" name="ConfNovaSenha">
                    </div>
                    <div class="text-center mt-5">
                        <input type="submit" class="btn btn-lg btn-danger text-white" value="OK" style="position: relative; right: 10px;">
                        <button class="btn btn-lg btn-danger text-white" style="position: relative; left: 10px;">Voltar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="d-md-none d-sm-block">
        <div class="caixaLoginP mt-4">
            <br><br>
            <h2 class="font-weight-bold text-center titulo">Alterar Senha</h2>
            <form action="<?php echo base_url("index.php/AlterarSenha/validarAlterarSenhaResponsivo"); ?>" method="POST" id="AlterarSenhaResponsivo">
                <div class="mt-4 ">
                <div class="form-group mx-auto col-10">
                        <label class="font-weight-bold">Nova Senha</label>
                        <input type="text" class="form-control" id="NovaSenha" autocomplete="off" name="NovaSenha">
                    </div>
                    <div class="form-group mx-auto col-10">
                        <label class="font-weight-bold">Confirmar Nova Senha</label>
                        <input type="text" class="form-control" id="ConfNovaSenha" autocomplete="off" name="ConfNovaSenha">
                    </div>
                    <div class="text-center mt-5">
                        <button type="submit" class="btn btn-lg btn-danger text-white" style="position: relative; right: 10px;">OK</button>
                        <button type="submit" class="btn btn-lg btn-danger text-white" style="position: relative; left: 10px;">Voltar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/javascript/validacoes.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js'); ?>"></script>

</body>

</html>