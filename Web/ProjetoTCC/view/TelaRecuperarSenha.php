<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>

    <div class="mt-5 d-none d-md-block">
        <div class="caixaLogin mx-auto mt-5">
            <h2 class="text-center titulo">Recuperação de Senha</h2>
            <form>
                <div class="mt-5">
                    <div class="form-group mx-auto col-10">
                        <label for="email" class="font-weight-bold">Seu E-mail</label>
                        <input type="text" class="form-control  font-weight-bold" id="email" name="email">
                    </div>
                    <div class="">
                        <button type="submit" class="btn botaoForm text-white">Enviar nova senha</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="d-md-none d-sm-block">
        <div class="caixaLoginP mt-4">
            <h2 class="text-center titulo">Recuperação de Senha</h2>
            <form>
                <div class="mt-5">
                    <div class="form-group mx-auto col-12">
                        <label for="email" class="font-weight-bold">Seu E-mail</label>
                        <input type="text" class="form-control  font-weight-bold" id="email" name="email">
                    </div>
                    <div class="">
                        <button type="submit" class="btn botaoForm mt-4 text-white rounded mx-auto d-block">Enviar nova senha</button>
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