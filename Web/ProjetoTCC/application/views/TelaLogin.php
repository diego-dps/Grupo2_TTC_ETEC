<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo.png")?>" type="image/x-png"/>
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/estilo.css'); ?>" rel="stylesheet">
</head>

<body>

    <div class="mt-5 d-none d-md-block">
        <div class="caixaLogin mx-auto my-auto">
            <h2 class="text-center titulo">Login</h2>
            <form action="<?php echo base_url("index.php/Login/validarLogin"); ?>" method="POST" id="login">
                <div class="mt-4 ">
                    <div class="form-group mx-auto col-10">
                        <label for="user" class="font-weight-bold">Usuário</label>
                        <input type="text" class="form-control font-weight-bold" id="user" name="user">
                    </div>
                    <div class="form-group mx-auto col-10">
                        <label for="pass" class="font-weight-bold">Senha</label>
                        <input type="password" class="form-control font-weight-bold" id="pass" name="pass">
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-danger btn-lg text-white">Entrar</button>
                    </div>
                    <div class="text-center mt-5">
                        <a href="<?php echo base_url('index.php/Telas/telaRecuperarSenha');?>" class="font-weight-bold A">Esqueci minha senha</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="d-md-none d-sm-block">
        <div class="caixaLoginP mt-4">
            <h2 class="text-center titulo">Login</h2>
            <form action="<?php echo base_url("index.php/Login/validarLogin"); ?>" method="POST" id="loginResponsivo">
                <div class="mt-4 ">
                    <div class="form-group mx-auto col-12">
                        <label for="user" class="font-weight-bold">Usuário</label>
                        <input type="text" class="form-control font-weight-bold" id="user" name="user">
                    </div>
                    <div class="form-group mx-auto col-12">
                        <label for="pass" class="font-weight-bold">Senha</label>
                        <input type="password" class="form-control font-weight-bold" id="pass" name="pass">
                    </div>
                    <div class="text-center mt-5">
                        <button type="submit" class="btn btn-lg btn-danger text-white">Entrar</button>
                    </div>
                    <div class="text-center mt-5">
                        <a href="<?php echo base_url('index.php/Telas/telaRecuperarSenha');?>" class="font-weight-bold A-do-login">Esqueci minha senha</a>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js'); ?>"></script>
    <script src="<?php echo base_url('assets/javascript/validacoes.js'); ?>"></script>

</body>

</html>