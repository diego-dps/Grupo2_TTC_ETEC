<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/bootstrap.css">

    <style>
        body {
            background-color: #d3d3d3;
        }

        .caixaLogin {
            width: 25em;
            height: 30em;
            background-color: #345D7E;
            border-radius: 10px;
        }

        .titulo{
            padding-top: 0.5em;
        }

        .corBotao {
            background-color: #A64D79;
        }
    </style>
</head>

<body>

    <div class="caixaLogin mx-auto mt-5">
        <h2 class="text-white text-center titulo">Login</h2>
        <form>
            <div class="mt-4 ">
                <div class="form-group mx-auto col-lg-10">
                    <label for="user" class="text-white">Usuário</label>
                    <input type="text" class="form-control" id="user" name="user">
                </div>
                <div class="form-group mx-auto col-lg-10">
                    <label for="pass" class="text-white">Senha</label>
                    <input type="password" class="form-control" name="pass">
                </div>
                <div class="text-center mt-5">
                    <button type="submit" class="btn corBotao text-white">Entrar</button>
                </div>
                <div class="text-center mt-5">
                    <a href="#" class="text-white">Esqueci minha senha</a>
                </div>
            </div>
        </form>
    </div>


    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>

</html>