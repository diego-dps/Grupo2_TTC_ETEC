<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo.png")?>" type="image/x-png"/>
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/estilo.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/modal.css'); ?>" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Itens do Cardapio</title>
    <script>
        $(document).ready(function() {
            $('#preco').mask('#.##0,00', {reverse: true})
        });
    </script>
</head>

<body>
    <div class="d-none d-md-block">
        <div class="container-fluid mt-4" style="background-color: white; border: solid white 15px; border-radius: 10px;">
            <div class="row mx-auto mt-2">
                <h1 class="my-auto display-5 text-center col-8" style=" position: relative; left: 190px; top: -10px;">Itens</h1>
                <form class="col-3" action="<?php echo base_url("index.php/Welcome/pesquisarItens")?>" method="post">
                    <input class="my-auto form-control bg-dark text-white" style="position: relative; left: 15px;" name="pesquisar" id="pesquisar" type="search" placeholder="Pesquisar">
                </form>
                <div class="col-1 mx-auto my-auto">
                    <a href=" <?php echo base_url('index.php/Welcome/TelaCadastrarItem')?>"><img class="rounded mx-auto d-block" src="<?php echo base_url('assets/img/add.png');?>" alt=""></a>
                </div>
            </div>
            <table class="table table-dark table-hover text-center">
                <thead>
                    <tr class="text-danger">
                        <th scope="col">Foto</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Preço</th>
                    </tr>
                </thead>
                <div>
                    <tbody>
                        <?php foreach ($item as $itens) : ?>
                            <tr>
                                <th scope="col"> <img class="imagens" src="<?php echo base_url("assets/img/itens/" . $itens['foto_Item']) ?>" alt="Card image cap"></th>
                                <th scope="col"><?php echo $itens['nome_Item'] ?></th>
                                <th scope="col" class="alinhamentodetexto"><?php echo $itens['descricao_Item'] ?></th>
                                <th scope="col"><?php echo reais($itens['preco_Item']) ?></th>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </div>
            </table>
        </div>
        <a class="mt-4 mb-5 btn btn-lg btn-danger rounded mx-auto d-block col-1" href="<?php echo base_url('index.php/Welcome/telaCardapio');?>">Voltar</a>
    </div>

    <!-- Responsivo-->
    <div class="d-md-none d-sm-block">
        <div class="container2 mx-auto mt-4 table-responsive-sm">
            <div class="row mx-auto mt-2">
                <h1 class="display-5 col-12 text-center my-auto">Itens</h1>
                <form class="mx-auto mt-2 col-12" action="<?php echo base_url("index.php/Welcome/pesquisarItens")?>" method="post">
                    <input class="mx-auto bg-dark form-control text-white pesquisa" name="pesquisar" id="pesquisar" type="search" placeholder="Pesquisar">
                </form>
            </div>
            <table class="mt-2 table table-dark table-hover text-center">
                <thead>
                    <tr class="text-danger">
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Editar Item</th>
                        <th scope="col">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($item as $itens) : ?>
                        <tr>
                            <th scope="col"><img class="imagens2" src="<?php echo base_url("assets/img/itens/" . $itens['foto_Item']) ?>" alt="Card image cap"></th>
                            <th scope="col"><?php echo $itens['nome_Item'] ?></th>
                            <th scope="col" class="alinhamentodetexto"><?php echo $itens['descricao_Item'] ?></th>
                            <th scope="col"><?php echo reais($itens['preco_Item']) ?></th>
                            <th scope="col">
                            <button type="button" class="mt-4 btn btn-primary rounded mx-auto d-block" 
                                style="position: relative; top: -25px;" data-toggle="modal" 
                                data-target="#exampleModal" data-whatever="<?php echo $itens['cod_Item']?>" 
                                data-whatevernome="<?php echo $itens['nome_Item'] ?>" data-whateverdescricao="<?php echo $itens['descricao_Item'] ?>"
                                data-whateverpreco="<?php echo reais($itens['preco_Item']) ?>" data-whatevercodCardapio="<?php echo $itens['cod_Cardapio'] ?>">Editar</button>
                            </th>
                            <th scope="col">
                            <button type="button" class="mt-4 btn btn-danger rounded mx-auto d-block" style="position: relative; top: -25px;" data-toggle="modal" data-target="#ExemploModalCentralizado"
                                data-whateverid="<?php echo $itens['cod_Item']?>">
                                Remover
                            </button>
                            </th>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <a class="mt-4 btn btn-danger rounded mx-auto d-block col-3" href="<?php echo base_url('index.php/Welcome/telaADM');?>">Voltar</a></button>
    </div>

    <script type="text/javascript" src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/node_modules/jquery/dist/jquery.mask.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/javascript/validacoes.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js'); ?>"></script>
    <script type="text/javascript">
        $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        var recipientnome = button.data('whatevernome')
        var recipientdescricao = button.data('whateverdescricao')
        var recipientpreco = button.data('whateverpreco')
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('#id_item').val(recipient)
        modal.find('#nomeItem').val(recipientnome)
        modal.find('#descricao').val(recipientdescricao)
        modal.find('#preco').val(recipientpreco)
        })
    </script>
    <script type="text/javascript">
        $('#ExemploModalCentralizado').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('whateverid')
        var modal = $(this)
        modal.find('#id').val(recipient)
        })
    </script>
</body>

</html>