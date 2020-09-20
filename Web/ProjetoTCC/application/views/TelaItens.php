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
    <title>Itens</title>
    <script>
        $(document).ready(function() {
            $('#preco').mask('#.##0,00', {reverse: true})
        });
    </script>
</head>

<body>
    <div class="d-none d-md-block">
        <div class="container1 mx-auto mt-4">
            <div class="row mx-auto mt-2">
                <h1 class="my-auto display-5 text-center col-8" style=" position: relative; left: 190px; top: -10px;">Itens</h1>
                <form class="col-4" action="">
                    <input class="my-auto form-control bg-dark text-white" style="position: relative; left: 15px;" type="search" placeholder="Pesquisar">
                </form>
            </div>
            <table class="table table-dark table-hover text-center">
                <thead>
                    <tr class="text-danger">
                        <th scope="col">Foto</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Editar Item</th>
                        <th scope="col">Excluir</th>
                    </tr>
                </thead>
                <div>
                <tbody>
                    <tr>
                        <th scope="col">Foto</th>
                        <th scope="col">Pizza Mussarela</th>
                        <th scope="col">Mussarela e Tomate</th>
                        <th scope="col">R$32,00</th>
                        <th scope="col">
                            <div class="container">
                                <button type="button" class="mt-4 btn btn-primary rounded mx-auto d-block" style="position: relative; top: -25px;" id="myBtn">Editar</button>
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" id="myModal" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header" style="padding:35px 50px;">
                                            <h4 style="position: relative; left: 41.9%;">Editar</h4>
                                            </div>
                                            <div class="modal-body">
                                            <form action="<?php echo base_url("index.php/Itens/validarUpdateItens");?>" method="POST" id="UpdateItens">
                                                <div class="form-group col-12">
                                                    <label class="nomeitem">Nome</label>
                                                    <input type="text" class="form-control" autocomplete="off" name="nomeItem" id="nomeItem">
                                                </div>
                                                <div class="form-group col-12">
                                                    <label class="desc">Descrição</label>
                                                    <textarea type="text" class="form-control" name="descricao" id="descricao" rows="3"></textarea>
                                                </div>
                                                <div class="form-group col-4">
                                                    <label class="preco">Preço</label>
                                                    <input type="text" class="form-control" name="preco" id="preco">
                                                </div>
                                                <div class="form-group col-12">
                                                    <label class="foto">Adicionar foto</label>
                                                    <input type="file" class="form-control" name="addFoto" id="addFoto">
                                                </div>                                        
                                                </div>
                                                <div class="modal-footer flex-center">
                                                    <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal" style="position: static;">Calcelar</button>
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
                            <form action="<?php echo base_url("index.php/Itens/excluirItem");?>" method="POST" id="ExcluirItens">
                                <input type="submit" class="mt-4 btn btn-danger rounded mx-auto d-block" style="position: relative; top: -25px;" value="Romover">
                            </form>
                        </th>
                    </tr>
                    <!-- Apagar o resto do codigo dps de fazer o model e a estrutura de repetição-->
                    <tr>
                        <th scope="col">Foto</th>
                        <th scope="col">Pizza Calabresa</th>
                        <th scope="col">Calabresa e Cebola</th>
                        <th scope="col">R$34,00</th>
                        <th scope="col"><button type="button" class="mt-4 btn btn-primary rounded mx-auto d-block" style="position: relative; top: -25px;" id="myBtn">Editar</button></th>
                        <th scope="col"><button type="button" class="mt-4 btn btn-danger rounded mx-auto d-block" style="position: relative; top: -25px;" id="myBtn">Romover</button></th>
                    </tr>
                    <tr>
                        <th scope="col">Foto</th>
                        <th scope="col">Coca-cola</th>
                        <th scope="col">Coca-cola 2l</th>
                        <th scope="col">R$9,00</th>
                        <th scope="col"><button type="button" class="mt-4 btn btn-primary rounded mx-auto d-block" style="position: relative; top: -25px;" id="myBtn">Editar</button></th>
                        <th scope="col"><button type="button" class="mt-4 btn btn-danger rounded mx-auto d-block" style="position: relative; top: -25px;" id="myBtn">Romover</button></th>
                    </tr>
                    <tr>
                        <th scope="col">Foto</th>
                        <th scope="col">Fanta Laranja</th>
                        <th scope="col">Fanta Laranja 350ml</th>
                        <th scope="col">R$4,00</th>
                        <th scope="col"><button type="button" class="mt-4 btn btn-primary rounded mx-auto d-block" style="position: relative; top: -25px;" id="myBtn">Editar</button></th>
                        <th scope="col"><button type="button" class="mt-4 btn btn-danger rounded mx-auto d-block" style="position: relative; top: -25px;" id="myBtn">Romover</button></th>
                    </tr>
                </tbody>
                </div>
            </table>
        </div>
        <button class="mt-4 btn btn-lg btn-danger rounded mx-auto d-block"><a class="badge badge-danger" href="TelaADM.php">Voltar</a></button>
    </div>

    <!-- Responsivo-->
    <div class="d-md-none d-sm-block">
        <div class="container2 mx-auto mt-4 table-responsive-sm">
            <div class="row mx-auto mt-2">
                <h1 class="display-5 col-12 text-center my-auto">Itens</h1>
                <form class="mx-auto mt-2 col-12" action="">
                    <input class="mx-auto bg-dark form-control text-white pesquisa" type="search" placeholder="Pesquisar">
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
                    <tr>
                        <th scope="col">Pizza Mussarela</th>
                        <th scope="col">Mussarela e Tomate</th>
                        <th scope="col">R$32,00</th>
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
                                                <form action="<?php echo base_url("index.php/Itens/validarUpdateItens");?>" method="POST" id="UpdateItensresponsivo">
                                                    <div class="form-group col-12">
                                                        <label class="nomeitemresponsivo">Nome</label>
                                                        <input type="text" class="form-control" autocomplete="off" name="nomeItem" id="nomeItem">
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label class="descresponsivo">Descrição</label>
                                                        <textarea type="text" class="form-control" name="descricao" id="descricao" rows="3"></textarea>
                                                    </div>
                                                    <div class="form-group col-4">
                                                        <label class="precoresponsivo">Preço</label>
                                                        <input type="text" class="form-control" name="preco" id="preco">
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label class="fotoresponsivo">Adicionar foto</label>
                                                        <input type="file" class="form-control" name="addFoto" id="addFoto">
                                                    </div>                                        
                                                    </div>
                                                    <div class="modal-footer flex-center">
                                                        <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal" style="position: static;">Calcelar</button>
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
                            <form action="<?php echo base_url("index.php/Itens/excluirItem");?>" method="POST" id="ExcluirItensresponsivo">
                                <input type="submit" class="mt-4 btn btn-danger rounded mx-auto d-block" style="position: relative; top: -25px;" value="Romover">
                            </form>
                        </th>
                    </tr>
                    <tr>
                        <th scope="col">Pizza Calabresa</th>
                        <th scope="col">Calabresa e Cebola</th>
                        <th scope="col">R$34,00</th>
                        <th scope="col"><button type="button" class="mt-4 btn btn-primary rounded mx-auto d-block" style="position: relative; top: -25px;" id="myBtn">Editar</button></th>
                        <th scope="col"><button type="button" class="mt-4 btn btn-danger rounded mx-auto d-block" style="position: relative; top: -25px;" id="myBtn">Romover</button></th>
                    </tr>
                    <tr>
                        <th scope="col">Coca-cola</th>
                        <th scope="col">Coca-cola 2l</th>
                        <th scope="col">R$9,00</th>
                        <th scope="col"><button type="button" class="mt-4 btn btn-primary rounded mx-auto d-block" style="position: relative; top: -25px;" id="myBtn">Editar</button></th>
                        <th scope="col"><button type="button" class="mt-4 btn btn-danger rounded mx-auto d-block" style="position: relative; top: -25px;" id="myBtn">Romover</button></th>
                    </tr>
                </tbody>
            </table>
        </div>
        <button class="mt-4 btn btn-danger rounded mx-auto d-block"><a class="badge badge-danger" href="TelaADM.php">Voltar</a></button>
    </div>

    <script type="text/javascript" src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/node_modules/jquery/dist/jquery.mask.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/javascript/validacoes.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js'); ?>"></script>
</body>

</html>