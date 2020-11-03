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
        <h1 class="estilo">PRODUTOS</h1>
    </div>    
    <div class="container-fluid mt-4">
        <!--<div class="row mx-auto">
            <h1 class="display-5 col-8 text-center my-auto" style="position: relative; left: 152px; top: -10px;">Funcionários</h1>
            <form class="col-3" action="">
                <input class="my-auto form-control bg-dark text-white" style="position: relative; left: 15px;" type="search" placeholder="Pesquisar">
            </form>
            <div class="col-1 mx-auto my-auto">
                <a href=" <?php echo base_url('index.php/Welcome/telaCadastrarFuncionario')?>"><img class="rounded mx-auto d-block" src="<?php echo base_url('assets/img/icons8-add-user-male-30.png');?>" alt=""></a>
            </div>
        </div>-->
        <div class="wrapper">
            <div class="cards_wrap">
            <?php foreach ($cardapio as $cardapios) : ?>
                <div class="card_item">
                    <div class="card_inner">
                        <div class="card_top">
                            <img src="<?php echo base_url('assets/img/sobremesa.jpg'); ?>" alt="car" />
                        </div>
                        <input type="text" name="" id="" value="<?php echo $cardapios['cod_Cardapio'] ?>">
                        <p><?php echo $cardapios['categoria_Cardapio'] ?></p>
                        <div class="card_bottom">
                            <div class="card_category">
                            <!--<button type="button" class="mt-4 btn btn-primary rounded mx-auto d-block" 
                                    style="position: relative; top: -25px;" data-toggle="modal" 
                                    data-target="#exampleModal" data-whatever="<?php echo $funcionarios['cod_Funcionario']?>" 
                                    data-whatevernome="<?php echo $funcionarios['nome_Funcionario']?>" data-whatevercargo="<?php echo $funcionarios['cargo_Funcionario']?>"
                                    data-whatevercpf="<?php echo $funcionarios['cpf_Funcionario']?>" data-whatevertelefone="<?php echo $funcionarios['telefone_Funcionario']?>"
                                    data-whateveremail="<?php echo $funcionarios['email_Funcionario']?>" data-whateversenha="<?php echo $funcionarios['senha']?>"><?php echo $cardapios['categoria_Cardapio']?>
                                </button>-->
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
            </div>
        </div>
    </div>


    <!--Inicio modal Editar-->
    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <h4 style="position: relative; left: 42.5%;">Editar</h4>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url("index.php/CadastroFuncionario/validarEdicaoFuncionario"); ?>" method="POST" id="UpdateFuncionario" class="form-row">
                        <div class="form-row">
                            <div class="form-group mx-auto col-5">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" autocomplete="off">
                            </div>
                            <div class="form-group mx-auto col-5">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" autocomplete="off">
                            </div>
                            <div class="form-group mx-auto col-5">
                                <label for="cpf">CPF</label>
                                <input type="text" class="form-control" id="cpf" name="cpf">
                            </div>
                            <div class="form-group mx-auto col-5">
                                <label for="pass">Senha</label>
                                <input type="password" class="form-control" id="pass" name="pass">
                            </div>
                            <div class="form-group mx-auto col-5">
                                <label for="tel">Celular</label>
                                <input type="text" class="form-control" id="celular" name="celular">
                            </div>
                            <div class="form-group mx-auto col-5">
                                <label for="ConfPass">Confirmar Senha</label>
                                <input type="password" class="form-control" id="ConfPass" name="ConfPass">
                            </div>
                            <input type="hidden" id="id_Funcionario" name="id_Funcionario">
                            <div class="form-group col-5 ml-4">
                                <label for="SelecionarCargo">Selecionar Cargo</label>
                                <select class="form-control" id="SelecionarCargo" name="SelecionarCargo">
                                    <option></option>
                                    <option>Administrador</option>
                                    <option>Cozinheiro</option>
                                    <option>Garçom</option>
                                </select>
                            </div>
                        </div>
                        </div>
                        <div class="modal-footer flex-center">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal" style="position: static;">Cancelar</button>
                            <input  type="submit" class="btn btn-primary btn-lg" style="position: static;" value="Salvar">
                        </div>
                    </form>
                </div>
        </div>
    </div>
</body>
</html>