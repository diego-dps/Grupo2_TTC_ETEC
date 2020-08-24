<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação Senha</title>
    <link rel="stylesheet" href="../css/bootstrap.css">

    <style>
        body {
            background-color: #d3d3d3;
        }

        .titulo{
            padding-top: 0.5em;
        }

        .caixaLogin {
            width: 25em;
            height: 30em;
            background-color: #345D7E;
            border-radius: 10px;
        }

        .botao {
            background-color: #A64D79;
            margin-left: 12.5em;
        }
    </style>
</head>

<body>

    <div class="caixaLogin mx-auto mt-5">
        <h2 class="text-white text-center titulo">Recuperação de Senha</h2>
        <form>
            <div class="mt-5">
                <div class="form-group mx-auto col-lg-10">
                    <label for="email" class="text-white">Seu E-mail</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="">
                    <button type="submit" class="btn botao text-white">Enviar nova senha</button>
                </div>
            </div>
        </form>
    </div>



    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>

</html>