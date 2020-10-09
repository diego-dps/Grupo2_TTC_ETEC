<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo.png")?>" type="image/x-png"/>
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/estilo.css'); ?>" rel="stylesheet">
    <title>Cadastro de Itens</title>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#preco').mask('#.##0,00', {reverse: true})
            $('#PRECO').mask('#.##0,00', {reverse: true})
        });
    </script>
</head>

<body>
    <div class="d-none d-md-block">
        <div class="caixaCadastro mx-auto mt-5 font-weight-bold">
        <h2 class="text-center titulo">Cadastrar Item</h2>
            <form class="form-row mt-2 mx-auto" action="<?php echo base_url("index.php/Itens/validarCadastroItens");?>" method="POST" enctype="multipart/form-data" id="CadastroItens">
                <div class="form-group col-12">
                    <label for="nomeItem">Nome do Item</label>
                    <input type="text" class="form-control" autocomplete="off" id="nomeItem" name="nomeItem">
                </div>
                <div class="form-group col-12">
                    <label for="descricao">Descrição</label>
                    <textarea type="text" class="form-control" id="descricao" name="descricao" rows="3"></textarea>
                </div>
                <div class="form-group col-3">
                    <label for="preco">Preço</label>
                    <input type="text" class="form-control" id="preco" name="preco">
                </div>
                <div class="form-group col-9">
                    <label for="addFoto">Adicionar foto</label>
                    <input type="file" class="form-control" id="addFoto" name="addFoto">
                </div>
                <div class="form-row">
                    <div class="" style="position: relative; left: 80px; top: 21px;">
                        <input type="submit" class="btn btn-danger btn-lg btnCadastrar" value="Cadastrar">
                    </div>
                    <div class="text-white" style="position: relative; left: 105px; top: 5px;">
                        <a class="btn btn-lg  btn-danger mx-auto d-block mt-3" href="<?php echo base_url('index.php/Telas/telaItens');?>">Voltar</a></button>
                    </div>                       
                </div>
            </form>
        </div>
    </div>

    <div class="d-md-none d-sm-block">
        <div class="caixaCadastroP mt-4 font-weight-bold">
        <h2 class="text-center titulo">Cadastrar Item</h2>
            <form class="form-row mt-2" action="<?php echo base_url("index.php/Itens/validarCadastroItensresponsivo");?>" method="POST" id="CadastroItensresponsivo">
                <div class="form-group col-12">
                    <label for="nomeItem">Nome do Item</label>
                    <input type="text" class="form-control" autocomplete="off" id="NOMEITEM" name="NOMEITEM">
                </div>
                <div class="form-group col-12">
                    <label for="descricao">Descrição</label>
                    <textarea type="text" class="form-control" id="DESCRICAO" name="DESCRICAO" rows="3"></textarea>
                </div>
                <div class="form-group col-4">
                    <label for="preco">Preço</label>
                    <input type="text" class="form-control" id="PRECO" name="PRECO" autocomplete="off">
                </div>
                <div class="form-group col-12">
                    <label for="addFoto">Adicionar foto</label>
                    <input type="file" class="form-control" id="ADDFOTO" name="ADDFOTO">
                </div>
                
                    
                        <button type="submit" class="btn btn-danger btn-lg mx-auto d-block mt-3">Cadastrar</button>
                    
                        <a class="btn btn-lg  btn-danger mx-auto d-block mt-3 col-4" href="<?php echo base_url('index.php/Telas/telaItens');?>">Voltar</a></button>
                                          
                
            </form>
        </div>
    </div>


    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/node_modules/jquery/dist/jquery.mask.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/javascript/validacoes.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js'); ?>"></script>
</body>

</html>