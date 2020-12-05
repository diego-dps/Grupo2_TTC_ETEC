<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo.png")?>" type="image/x-png"/>
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <!--<link href="<?php echo base_url('assets/css/estilo.css'); ?>" rel="stylesheet">-->
    <link href="<?php echo base_url('assets/css/cardapio.css'); ?>" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Cardapio</title>
</head>
<body>
    <div class="text-center my-auto cor">   
        <h1 class="estilo">CARDÁPIO</h1>
    </div>
          
    <div class="container-fluid mt-4">
        <div class="wrapper">
            <div class="cards_wrap">
            <?php foreach ($cardapio as $cardapios) : ?>
                <form class="card_item" action="<?php echo base_url("index.php/Welcome/itensCardapio")?>" method="post">
                <div class="card_inner">
                    <div class="card mb-2 shadow-sm" style="background: #212121;">
                        <img class="card-img-top imagens2" src="<?php echo base_url("assets/img/cardapio/" . $cardapios['foto_Cardapio']) ?>" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title" style="color: white;"><?php echo $cardapios['categoria_Cardapio'] ?></h5>
                            <input type="hidden" name="id" id="id" value="<?php echo $cardapios['cod_Cardapio'] ?>">
                            <button class="btn btn-danger" type="submit">VER</button>
                        </div>
                    </div>
                </div>
                </form>
            <?php endforeach ?>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <ul>
            <li><a class="btn btn-lg btn-danger" href="<?php echo base_url('index.php/Welcome/telaCadastroCardapio'); ?>" style="position: relative; right: 35px;">Adicionar</a></li>
            <li><a class="btn btn-lg btn-danger" href="<?php echo base_url('index.php/Welcome/telaADM'); ?>" style="position: relative; right: 10px;">Voltar</a></li>
        </ul>
    </div>
</body>
</html>