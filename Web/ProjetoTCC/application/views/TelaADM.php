<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo.png")?>" type="image/x-png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/estilo.css'); ?>" rel="stylesheet">
    <title>Página Inicial</title>
    <script type="text/javascript">
        function time()
        {
        today=new Date();
        h=today.getHours();
        m=today.getMinutes();
        s=today.getSeconds();
        document.getElementById('txt').innerHTML=h+":"+m+":"+s;
        setTimeout('time()',500);
        }
    </script>
    <script language=javascript type="text/javascript">
        dayName = new Array ("domingo", "segunda-feira", "terça-feira", "quarta-feira", "quinta-feira", "sexta-feira", "sábado")
        monName = new Array ("janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro","novembro", "dezembro")
        now = new Date
    </script>
</head>

<body onload="time()">
    <br><br><br><br><br><br>
    <div class="mt-5 d-none d-md-block">
        <div class="row mx-auto my-auto">
            <div class="mt-4 col-6">
                <h1 class="text-center text-white display-4">Nome do Usuário</h1>
            </div>
            <div class="col-6">
                <h1 class="text-white display-4">
                    <script language=javascript type="text/javascript">
                        document.write (now.getDate () + " de " + monName [now.getMonth() ]   +  " de "  +     now.getFullYear () + ".")
                    </script>
                    <br>
                    <script>
                        document.write(dayName[now.getDay() ] + " ")
                    </script>
                    <div id="txt"></div>
                </h1>    
            </div>
        </div>
        <br><br><br>
        <div class="mt-5 row mx-auto">
            <div class="col-4">
                <h1 class="text-center text-white display-4">Itens</h1>
                <img class="mt-5 rounded mx-auto d-block" src="<?php echo base_url("assets/img/icone_itens.png")?>" alt="" width="120px" height="120px">
            </div>
            <div class="col-4">
                <h1 class="text-center text-white display-4">Funcionários</h1>
                <img class="mt-5 rounded mx-auto d-block" src="<?php echo base_url("assets/img/icone_itens.png")?>" alt="" width="120px" height="120px">
            </div>
            <div class="mr-0 col-4">
                <h1 class="text-center text-white display-4">Configurações</h1>
                <img class="mt-5 rounded mx-auto d-block" src="<?php echo base_url("assets/img/icone_config.png")?>" alt="" width="120px" height="120px">
            </div>
        </div>
    </div>
    <div class="mt-5 d-sm-block d-md-none">
        <h1 class="text-center text-white display-5">Nome do Usuário</h1>
        <div class="mt-4">
            <a href="#">
                <h1 class="text-center text-white display-5">Itens</h1>
                <img class="rounded mx-auto d-block" src="<?php echo base_url("assets/img/icone_itens.png")?>" alt="" width="120px" height="120px">
            </a>

        </div>
        <div class="mt-4">
            <a href="#">
                <h1 class="text-center text-white display-5">Funcionários</h1>
                <img class="rounded mx-auto d-block" src="<?php echo base_url("assets/img/icone_funcionarios.png")?>" alt="" width="120px" height="120px">
            </a>

        </div>
        <div class="mt-4 mb-4">
            <a href="#">
                <h1 class="text-center text-white display-5">Configurações</h1>
                <img class="rounded mx-auto d-block" src="<?php echo base_url("assets/img/icone_config.png")?>" alt="" width="120px" height="120px">
            </a>

        </div>
    </div>


    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js'); ?>"></script>
</body>

</html>