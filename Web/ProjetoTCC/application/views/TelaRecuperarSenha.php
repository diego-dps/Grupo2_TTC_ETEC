<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha</title>
    <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo.png")?>" type="image/x-png"/>
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/estilo.css'); ?>" rel="stylesheet">
</head>

<body>

    <div class="mt-5 d-none d-md-block">
        <div class="caixaLogin mx-auto mt-5">
            <br>
            <h2 class="text-center titulo" style="position: relative; top: -10px;">Recuperação de Senha</h2>
            <form action="<?php echo base_url("index.php/RecuperaSenha/validarRecuperarSenha"); ?>" method="POST" id="RecuperarSenha">
                <div class="mt-5">
                    <div class="text-center">
                        <h5 class="font-weight-bold" style="position: relative; top: -30px;">Informe o seu email</h5>
                        <h5 class="font-weight-bold" style="position: relative; top: -40px;">para alterar a sua senha</h5>
                    </div>
                    <div class="form-group mx-auto col-10">
                        <label class="font-weight-bold">Seu E-mail</label>
                        <input type="text" class="form-control" autocomplete="off" id="email" name="email">
                    </div>
                    <div class="text-center mt-5">
                        <input type="submit" class="btn btn-lg btn-danger text-white" value="Enviar Email" style="position: relative; right: 10px;">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="d-md-none d-sm-block">
        <div class="caixaLoginP mt-4">
            <h2 class="text-center titulo">Recuperação de Senha</h2>
            <form action="<?php echo base_url("index.php/RecuperaSenha/validarRecuperarSenha"); ?>" method="POST" id="RecuperarSenhaResponsivo">
                <div class="mt-5">
                    <div class="text-center">
                        <h5 class="font-weight-bold" style="position: relative; top: -30px;">Informe o seu email</h5>
                        <h5 class="font-weight-bold" style="position: relative; top: -40px;">para alterar a sua senha</h5>
                    </div>
                    <div class="form-group mx-auto col-12">
                        <label class="font-weight-bold">Seu E-mail</label>
                        <input type="text" class="form-control" autocomplete="off" id="email" name="email">
                    </div>
                    <div class="text-center mt-5">
                        <input type="submit" class="btn btn-lg btn-danger text-white" value="Enviar Email" style="position: relative; right: 10px;">
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