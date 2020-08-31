<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>

    <div class="mt-5 d-none d-md-block">
        <div class="caixaLogin mx-auto my-auto">
            <h2 class="text-center titulo">Login</h2>
            <form>
                <div class="mt-4 ">
                    <div class="form-group mx-auto col-10">
                        <label for="user" class="font-weight-bold">Usuário</label>
                        <input type="text" class="form-control font-weight-bold" id="user" name="user">
                    </div>
                    <div class="form-group mx-auto col-10">
                        <label for="pass" class="font-weight-bold">Senha</label>
                        <input type="password" class="form-control font-weight-bold" id="pass" name="pass">
                    </div>
                    <div class="text-center mt-5">
                        <button type="submit" class="btn corBotao text-white">Entrar</button>
                    </div>
                    <div class="text-center mt-5">
                        <a href="#" class="font-weight-bold">Esqueci minha senha</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="d-md-none d-sm-block">
        <div class="caixaLoginP mt-4">
            <h2 class="text-center titulo">Login</h2>
            <form>
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
                        <button type="submit" class="btn btn-lg corBotao text-white">Entrar</button>
                    </div>
                    <div class="text-center mt-5">
                        <a href="#" class="font-weight-bold">Esqueci minha senha</a>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>

</html>