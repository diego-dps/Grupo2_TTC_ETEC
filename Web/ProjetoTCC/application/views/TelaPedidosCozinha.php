<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo.png")?>" type="image/x-png"/>
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/pedido.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/estilo.css'); ?>" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Lista de Pedidos</title>
</head>
<body>
    <div class="d-none d-md-block">
        <div class="container-fluid mt-4" style="background-color: white; border: solid white 15px; border-radius: 10px;">
            <ul class="justify-content-end ">
                <li><h1 style="position: relative; right: 55px; top: 6px;">Pedidos</h1></li>
                <li><a class="btn btn-danger" href="<?php echo base_url('index.php/Welcome/telaPedidosPendentesCozinha'); ?>">Pedidos Pendentes</a></li>
                <li><a class="btn btn-danger" href="<?php echo base_url('index.php/Welcome/telaPedidosConcluidosCozinha'); ?>">Pedidos Concluidos</a></li>
                <li><a class="btn btn-danger" href="<?php echo base_url('index.php/Welcome/telaPedidosEntreguesCozinha'); ?>">Pedidos Entregues</a></li>
                <li><a class="btn btn-danger" href="<?php echo base_url('index.php/Welcome/index'); ?>">Sair</a></li>
            </ul>
            <table class="table table-dark table-hover text-center">
                <thead>
                    <tr class="text-danger">
                        <th scope="col" class="alinhamentodetexto2">Codigo do Pedido</th>
                        <th scope="col">Mesa</th>
                        <th scope="col">Pedido</th>
                        <th scope="col">Observação</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Horário</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($pedido as $pedidos) : ?>
                    <tr>
                        <th scope="col"><?php echo $pedidos['cod_Pedido'] ?></th>
                        <th scope="col"><?php echo $pedidos['numero_Mesa'] ?></th>
                        <th scope="col" class="alinhamentodetexto"><?php echo $pedidos['nome_Item'] ?></th>
                        <th scope="col" class="alinhamentodetexto"><?php 
                            if($pedidos['observacao_Pedido'] != null){
                                echo $pedidos['observacao_Pedido'];
                            } else {
                                echo "Sem Observação";    
                            }
                             ?></th>
                        <th scope="col"><?php echo $pedidos['quantidade'] ?></th>
                        <th scope="col"><?php echo FormatarData($pedidos['horario_Pedido']) ?></th>
                        <th scope="col">
                            <button type="button" class="mt-4 btn btn-success rounded mx-auto d-block" style="position: relative; top: -25px;" data-toggle="modal" data-target="#ExemploModalCentralizado"
                                data-whateverid="<?php echo $pedidos['cod_Pedido']?>" data-whateverStatus="<?php echo $pedidos['status_Pedido']?>">
                                <?php echo $pedidos['status_Pedido'] ?>
                            </button>
                        </th>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
            <br>
        </div>
        <br>
    </div>


    <!-- Modal Alterar-->
    <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h2 class="modal-title" id="TituloModalCentralizado" style="position: relative; left: 30%; color: white;">Alterar Status</h2>
                </div>
                <div class="modal-body">
                    <h6>Deseja alterar o status do pedido ?</h6>
                    <form action="<?php echo base_url("index.php/Pedidos/validarStatusPedido");?>" method="POST" id="AlterararStatusCozinha">
                    <input type="hidden" id="id" name="id">
                    <div class="form-group col-12">
                        <label for="SelecionarStatus">Selecionar Status</label>
                        <select class="form-control" id="SelecionarStatus" name="SelecionarStatus">
                            <option></option>
                            <option>Pendente</option>
                            <option>Concluido</option>
                            <option>Entregue</option>
                         </select>
                    </div>
                </div>
                <div class="modal-footer bg-white">
                    <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger btn-lg">Alterar</button>
                </div>
                </form>
            </div>
        </div>
    </div>


    <div class="d-md-none d-sm-block">
        <h1 class="text-center mt-4 display-5 text-white">Somente funcionários da cozinha podem acessar essa página :) !! </h1>
    </div>

    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/javascript/validacoes.js'); ?>"></script>
    <script type="text/javascript">
        $('#ExemploModalCentralizado').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('whateverid')
        var recipientStatus = button.data('whateverStatus')
        var modal = $(this)
        modal.find('#id').val(recipient)
        modal.find('#SelecionarStatus').val(recipientStatus)
        })
    </script>
</body>

</html>