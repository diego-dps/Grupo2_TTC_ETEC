<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo.png") ?>" type="image/x-png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/estilo.css'); ?>" rel="stylesheet">
    <title>Página Inicial</title>
    <script type="text/javascript">
        function time() {
            today = new Date();
            h = today.getHours();
            m = today.getMinutes();
            s = today.getSeconds();
            document.getElementById('txt').innerHTML = h + ":" + m + ":" + s;
            setTimeout('time()', 500);
        }
    </script>
    <script language=javascript type="text/javascript">
        dayName = new Array("Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado")
        monName = new Array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro")
        now = new Date
    </script>
</head>

<body onload="time()">

    <div class="mt-2 d-none d-md-block">
        <a class="ml-2 mr-auto btn btn-danger btn-lg" href="<?php echo base_url('index.php/Telas/telaLogin'); ?>">Sair</a></button>
        <br><br><br><br><br>
        <div class="row mx-auto my-auto">
            <div class="mt-4 col-6">
                <h1 class="text-center text-white display-4">Nome do Usuário</h1>
            </div>
            <div class="col-6">
                <h1 class="text-white display-4">
                    <script language=javascript type="text/javascript">
                        document.write(now.getDate() + " de " + monName[now.getMonth()] + " de " + now.getFullYear())
                    </script>
                    <br>
                    <script>
                        document.write(dayName[now.getDay()] + " ")
                    </script>
                    <div id="txt"></div>
                </h1>
            </div>
        </div>
        <br><br>
        <div class="row mx-auto">
            <div class="tamanhobotao mx-auto col-4">
                <a class="btn btn-danger btn-lg btn-block rounded mx-auto d-block col-5" style="position: relative; left: 160px;" href="<?php echo base_url('index.php/Telas/telaItens'); ?>">Itens</a></button>
            </div>
            <div class="tamanhobotao mx-auto col-4">
                <a class="btn btn-danger btn-lg btn-block rounded mx-auto d-block col-5" href="<?php echo base_url('index.php/Telas/telaFuncionarios'); ?>">Funcionários</a></button>
            </div>
            <div class="tamanhobotao mx-auto col-4">
                <a class="btn btn-danger btn-lg btn-block rounded mx-auto d-block col-5" style="position: relative; right: 160px;" href="">Configurações</a></button>
            </div>

        </div>
    </div>
    <div class="d-sm-block d-md-none">
        <a class="ml-2 mt-2 btn btn-danger btn-sm" href="<?php echo base_url('index.php/Telas/telaLogin'); ?>">Sair</a></button>
        <br><br><br>
        <h1 class="text-center text-white display-5">Nome do Usuário</h1>
        <div class="tamanhobotaop mx-auto">
            <a class="btn btn-danger btn-lg btn-block rounded mx-auto d-block" href="<?php echo base_url('index.php/Telas/telaItens'); ?>">Itens</a></button>
            <a class="btn btn-danger btn-lg btn-block rounded mx-auto d-block" href="<?php echo base_url('index.php/Telas/telaFuncionarios'); ?>">Funcionários</a></button>
            <a class="btn btn-danger btn-lg btn-block rounded mx-auto d-block" href="">Configurações</a></button>
        </div>
    </div>


    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js'); ?>"></script>
</body>

</html>