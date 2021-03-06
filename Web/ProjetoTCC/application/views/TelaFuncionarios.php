<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo.png")?>" type="image/x-png"/>
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/estilo.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/modal.css'); ?>" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#cpf").mask("000.000.000-00", {reverse: false})
            $("#CPF").mask("000.000.000-00", {reverse: false})
            $("#celular").mask("(00) 00000-0000")
            $("#CELULAR").mask("(00) 00000-0000")
        });
    </script>
    <title>Funcionários</title>
</head>

<body>
    <div class="d-none d-md-block">
        <div class="container-fluid mt-4" style="background-color: white; border: solid white 15px; border-radius: 10px;">
            <div class="row mx-auto">
                <h1 class="display-5 col-8 text-center my-auto" style="position: relative; left: 152px; top: -10px;">Funcionários</h1>
                <form class="col-3" action="<?php echo base_url('index.php/Welcome/pesquisarFuncionarios')?>" method="post">
                    <input class="my-auto form-control bg-dark text-white" style="position: relative; left: 15px;" type="search" name="pesquisar" id="pesquisar" placeholder="Pesquisar">
                </form>
                <div class="col-1 mx-auto my-auto">
                    <a href=" <?php echo base_url('index.php/Welcome/telaCadastrarFuncionario')?>"><img class="rounded mx-auto d-block" src="<?php echo base_url('assets/img/icons8-add-user-male-30.png');?>" alt=""></a>
                </div>
            </div>
            <table class="table table-dark table-hover text-center">
                <thead>
                    <tr class="text-danger">
                        <th scope="col">Nome</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Editar Funcionário</th>
                        <th scope="col">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($funcionario as $funcionarios) : ?>
                        <tr>
                            <th scope="col"><?php echo $funcionarios['nome_Funcionario'] ?></th>
                            <th scope="col"><?php echo $funcionarios['cargo_Funcionario'] ?></th>
                            <th scope="col"><?php echo $funcionarios['cpf_Funcionario'] ?></th>
                            <th scope="col"><?php echo $funcionarios['telefone_Funcionario'] ?></th>
                            <th scope="col"><?php echo $funcionarios['email_Funcionario'] ?></th>
                            <th scope="col">
                                <button type="button" class="mt-4 btn btn-primary rounded mx-auto d-block" 
                                    style="position: relative; top: -25px;" data-toggle="modal" 
                                    data-target="#exampleModal" data-whatever="<?php echo $funcionarios['cod_Funcionario']?>" 
                                    data-whatevernome="<?php echo $funcionarios['nome_Funcionario']?>" data-whatevercargo="<?php echo $funcionarios['cargo_Funcionario']?>"
                                    data-whatevercpf="<?php echo $funcionarios['cpf_Funcionario']?>" data-whatevertelefone="<?php echo $funcionarios['telefone_Funcionario']?>"
                                    data-whateveremail="<?php echo $funcionarios['email_Funcionario']?>" data-whateversenha="<?php echo $funcionarios['senha']?>">Editar
                                </button>
                            </th>
                            <th scope="col">
                                <!--<form action="<?php echo base_url("index.php/CadastroFuncionario/excluirFuncionario");?>" method="POST" id="ExcluirFuncionario">
                                    <input type="submit" id="id" name="id" class="mt-4 btn btn-danger rounded mx-auto d-block" style="position: relative; top: -25px;" value="Remover">
                                </form>-->
                                <button type="button" class="mt-4 btn btn-danger rounded mx-auto d-block" style="position: relative; top: -25px;" data-toggle="modal" data-target="#ExemploModalCentralizado"
                                data-whateverid="<?php echo $funcionarios['cod_Funcionario']?>">
                                    Remover
                                </button>
                            </th>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <a class="mt-4 mb-5 btn btn-lg btn-danger rounded mx-auto d-block col-1" href="<?php echo base_url('index.php/Welcome/telaADM');?>">Voltar</a></button>
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
    <!--Final do modal-->

    <!-- Modal Excluir-->
    <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h2 class="modal-title" id="TituloModalCentralizado" style="position: relative; left: 40%;">Excluir</h2>
                </div>
                <div class="modal-body">
                    <h6>Tem certeza de que deseja excluir o item selecionado?</h6>
                    <form action="<?php echo base_url("index.php/CadastroFuncionario/excluirFuncionario");?>" method="POST" id="ExcluirFuncionario">
                    <input type="hidden" id="id" name="id">
                </div>
                <div class="modal-footer bg-white">
                    <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger btn-lg">Apagar</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- responsivo -->
    <div class="d-md-none d-sm-block">
        <div class="container2 mx-auto mt-4 table-responsive-sm">
            <div class="row mx-auto mt-2">
                <h1 class="display-5 col-12 text-center">Funcionários</h1>
                <form class="mx-auto mt-2 col-12" action="<?php echo base_url('index.php/Welcome/pesquisarFuncionarios')?>" method="post">
                    <input class="mx-auto bg-dark form-control text-white pesquisa" type="search" name="pesquisar" id="pesquisar" placeholder="Pesquisar">
                    <a href=" <?php echo base_url('index.php/Welcome/telaCadastrarFuncionario')?>"><img class="rounded mx-auto d-block" src="<?php echo base_url('assets/img/icons8-add-user-male-30.png');?>" alt=""></a>
                </form>
            </div>
            <table class="mt-2 table table-dark table-hover text-center">
                <thead>
                    <tr class="text-danger">
                        <th scope="col">Nome</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($funcionario as $funcionarios) : ?>
                        <tr>
                            <th scope="col"><?php echo $funcionarios['nome_Funcionario'] ?></th>
                            <th scope="col"><?php echo $funcionarios['cargo_Funcionario'] ?></th>
                            <th scope="col"><?php echo $funcionarios['cpf_Funcionario'] ?></th>
                            <th scope="col"><?php echo $funcionarios['telefone_Funcionario'] ?></th>
                            <th scope="col"><?php echo $funcionarios['email_Funcionario'] ?></th>
                            <th scope="col">
                                <button type="button" class="mt-4 btn btn-primary rounded mx-auto d-block" 
                                    style="position: relative; top: -25px;" data-toggle="modal" 
                                    data-target="#exampleModal" data-whatever="<?php echo $funcionarios['cod_Funcionario']?>" 
                                    data-whatevernome="<?php echo $funcionarios['nome_Funcionario']?>" data-whatevercargo="<?php echo $funcionarios['cargo_Funcionario']?>"
                                    data-whatevercpf="<?php echo $funcionarios['cpf_Funcionario']?>" data-whatevertelefone="<?php echo $funcionarios['telefone_Funcionario']?>"
                                    data-whateveremail="<?php echo $funcionarios['email_Funcionario']?>" data-whateversenha="<?php echo $funcionarios['senha']?>">Editar
                                </button>
                            </th>
                            <th scope="col">
                                <!--<form action="<?php echo base_url("index.php/CadastroFuncionario/excluirFuncionario");?>" method="POST" id="ExcluirFuncionario">
                                    <input type="submit" id="id" name="id" class="mt-4 btn btn-danger rounded mx-auto d-block" style="position: relative; top: -25px;" value="Remover">
                                </form>-->
                                <button type="button" class="mt-4 btn btn-danger rounded mx-auto d-block" style="position: relative; top: -25px;" data-toggle="modal" data-target="#ExemploModalCentralizado"
                                data-whateverid="<?php echo $funcionarios['cod_Funcionario']?>">
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

    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/javascript/validacoes.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/node_modules/jquery/dist/jquery.mask.min.js"); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js'); ?>"></script>
    <script type="text/javascript">
        $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        var recipientnome = button.data('whatevernome')
        var recipientemail = button.data('whateveremail')
        var recipientcargo = button.data('whatevercargo')
        var recipientcpf = button.data('whatevercpf')
        var recipienttelefone = button.data('whatevertelefone')
        var recipientsenha = button.data('whateversenha')
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('#id_Funcionario').val(recipient)
        modal.find('#nome').val(recipientnome)
        modal.find('#email').val(recipientemail)
        modal.find('#SelecionarCargo').val(recipientcargo)
        modal.find('#cpf').val(recipientcpf)
        modal.find('#celular').val(recipienttelefone)
        modal.find('#pass').val(recipientsenha)
        modal.find('#ConfPass').val(recipientsenha)
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