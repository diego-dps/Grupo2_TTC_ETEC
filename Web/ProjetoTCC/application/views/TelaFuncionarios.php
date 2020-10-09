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
        <div class="container1 mt-4">
            <div class="row mx-auto">
                <h1 class="display-5 col-8 text-center my-auto" style="position: relative; left: 152px; top: -10px;">Funcionários</h1>
                <form class="col-3" action="">
                    <input class="my-auto form-control bg-dark text-white" style="position: relative; left: 15px;" type="search" placeholder="Pesquisar">
                </form>
                <div class="col-1 mx-auto my-auto">
                    <a href=" <?php echo base_url('index.php/Telas/telaCadastrarFuncionario')?>"><img class="rounded mx-auto d-block" src="<?php echo base_url('assets/img/icons8-add-user-male-30.png');?>" alt=""></a>
                </div>
            </div>
            <table class="table table-dark table-hover text-center">
                <thead>
                    <tr class="text-danger">
                        <th scope="col">Nome</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Editar Funcionário</th>
                        <th scope="col">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col">Zezinho</th>
                        <th scope="col">Garçom</th>
                        <th scope="col">
                        <div class="container">
                                <button type="button" class="mt-4 btn btn-primary rounded mx-auto d-block" style="position: relative; top: -25px;" id="myBtn">Editar</button>
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" id="myModal" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header" style="padding:35px 50px;">
                                            <h4 style="position: relative; left: 42.5%;">Editar</h4>
                                            </div>
                                            <div class="modal-body">
                                            <form action="<?php echo base_url("index.php/CadastroFuncionario/validarEdicaoFuncionario"); ?>" method="POST" id="UpdateFuncionario" class="form-row">
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
                                                <div class="modal-footer flex-center">
                                                    <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal" style="position: static;">Cancelar</button>
                                                    <input  type="submit" class="btn btn-primary btn-lg" style="position: static;" value="Salvar">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                $(document).ready(function(){
                                    $("#myBtn").click(function(){
                                    $("#myModal").modal();
                                    });
                                });
                            </script>
                        </th>
                        <th scope="col">
                            <form action="<?php echo base_url("index.php/CadastroFuncionario/excluirFuncionario");?>" method="POST" id="ExcluirFuncionario">
                                <input type="submit" class="mt-4 btn btn-danger rounded mx-auto d-block" style="position: relative; top: -25px;" value="Remover">
                            </form>
                        </th>
                    </tr>
                    <tr>
                        <th scope="col">Maria</th>
                        <th scope="col">Administrador</th>
                        <th scope="col"><button type="button" class="mt-4 btn btn-primary rounded mx-auto d-block" style="position: relative; top: -25px;" id="myBtn">Editar</button></th>
                        <th scope="col"><button type="button" class="mt-4 btn btn-danger rounded mx-auto d-block" style="position: relative; top: -25px;" id="myBtn">Remover</button></th>
                    </tr>
                    <tr>
                        <th scope="col">José</th>
                        <th scope="col">Cozinheiro</th>
                        <th scope="col"><button type="button" class="mt-4 btn btn-primary rounded mx-auto d-block" style="position: relative; top: -25px;" id="myBtn">Editar</button></th>
                        <th scope="col"><button type="button" class="mt-4 btn btn-danger rounded mx-auto d-block" style="position: relative; top: -25px;" id="myBtn">Remover</button></th>
                    </tr>
                    <tr>
                        <th scope="col">Rubens</th>
                        <th scope="col">Garçom</th>
                        <th scope="col"><button type="button" class="mt-4 btn btn-primary rounded mx-auto d-block" style="position: relative; top: -25px;" id="myBtn">Editar</button></th>
                        <th scope="col"><button type="button" class="mt-4 btn btn-danger rounded mx-auto d-block" style="position: relative; top: -25px;" id="myBtn">Remover</button></th>
                    </tr>
                </tbody>
            </table>
        </div>
        <a class="mt-4 mb-5 btn btn-lg btn-danger rounded mx-auto d-block col-1" href="<?php echo base_url('index.php/Telas/telaADM');?>">Voltar</a></button>
    </div>

    <div class="d-md-none d-sm-block">
        <div class="container2 mx-auto mt-4 table-responsive-sm">
            <div class="row mx-auto mt-2">
                <h1 class="display-5 col-12 text-center">Funcionários</h1>
                <form class="mx-auto mt-2 col-12" action="">
                    <input class="mx-auto bg-dark form-control text-white pesquisa" type="search" placeholder="Pesquisar">
                </form>
            </div>
            <table class="mt-2 table table-dark table-hover text-center">
                <thead>
                    <tr class="text-danger">
                        <th scope="col">Nome</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Editar Funcionário</th>
                        <th scope="col">Excluir</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col">Zezinho</th>
                        <th scope="col">Garçom</th>
                        <th scope="col">
                        <div class="container">
                                <button type="button" class="mt-4 btn btn-primary rounded mx-auto d-block" style="position: relative; top: -25px;" id="myBtn2">Editar</button>
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" id="myModal2" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header" style="padding:35px 50px;">
                                                <h4 style="position: relative; left: 170px;">Editar</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?php echo base_url("index.php/CadastroFuncionario/validarEdicaoFuncionarioresponsivo");?>" method="POST" id="UpdateFuncionarioresponsivo">
                                                    <div class="row justify-content-around">
                                                    <div class="form-group mx-auto col-5">
                                                        <label for="nome">Nome</label>
                                                        <input type="text" class="form-control" id="NOME" name="NOME" autocomplete="off">
                                                    </div>
                                                    <div class="form-group mx-auto col-5">
                                                        <label for="email">E-mail</label>
                                                        <input type="email" class="form-control" id="EMAIL" name="EMAIL" autocomplete="off">
                                                    </div>
                                                    <div class="form-group mx-auto col-5">
                                                        <label for="cpf">CPF</label>
                                                        <input type="text" class="form-control" id="CPF" name="CPF">
                                                    </div>
                                                    <div class="form-group mx-auto col-5">
                                                    <label for="pass">Senha</label>
                                                    <input type="password" class="form-control" id="PASS" name="PASS">
                                                </div>
                                                <div class="form-group mx-auto col-5">
                                                    <label for="tel">Celular</label>
                                                    <input type="text" class="form-control" id="CELULAR" name="CELULAR">
                                                </div>
                                                <div class="form-group mx-auto col-5">
                                                    <label for="ConfPass">Confirmar Senha</label>
                                                    <input type="password" class="form-control" id="CONFPASS" name="CONFPASS">
                                                </div>
                                                <div class="form-group col-5 ml-4">
                                                    <label for="SelecionarCargo">Selecionar Cargo</label>
                                                    <select class="form-control" id="SELECIONARCARGO" name="SELECIONARCARGO">
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
                            </div>
                            <script>
                                $(document).ready(function(){
                                    $("#myBtn2").click(function(){
                                    $("#myModal2").modal();
                                    });
                                });
                            </script>
                        </th>
                        <th scope="col">
                            <form action="<?php echo base_url("index.php/CadastroFuncionario/excluirFuncionario");?>" method="POST" id="ExcluirFuncionarioresponsivo">
                                <input type="submit" class="mt-4 btn btn-danger rounded mx-auto d-block" style="position: relative; top: -25px;" value="Romover">
                            </form>
                        </th>
                    </tr>
                    <tr>
                        <th scope="col">Maria</th>
                        <th scope="col">Administrador</th>
                        <th scope="col"><button type="button" class="mt-4 btn btn-primary rounded mx-auto d-block" style="position: relative; top: -25px;" id="myBtn">Editar</button></th>
                        <th scope="col"><button type="button" class="mt-4 btn btn-danger rounded mx-auto d-block" style="position: relative; top: -25px;" id="myBtn">Remover</button></th>
                    </tr>
                    <tr>
                        <th scope="col">José</th>
                        <th scope="col">Cozinheiro</th>
                        <th scope="col"><button type="button" class="mt-4 btn btn-primary rounded mx-auto d-block" style="position: relative; top: -25px;" id="myBtn">Editar</button></th>
                        <th scope="col"><button type="button" class="mt-4 btn btn-danger rounded mx-auto d-block" style="position: relative; top: -25px;" id="myBtn">Remover</button></th>
                    </tr>
                </tbody>
            </table>
        </div>
        <a class="mt-4 btn btn-danger rounded mx-auto d-block col-3" href="<?php echo base_url('index.php/Telas/telaADM');?>">Voltar</a></button>
    </div>



    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/javascript/validacoes.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/node_modules/jquery/dist/jquery.mask.min.js"); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js'); ?>"></script>
</body>

</html>