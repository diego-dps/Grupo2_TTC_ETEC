 # Requisições da API

## Para Requisições em Cardapio

- ##### POST, GET e PATCH : 
>localhost:3000/Cardapio 

- ##### DELETE:
>localhost:3000/Cardapio/{cod_Cardapio} 

- ##### Buscar um Cardapio epecífico:
>localhost:3000/Cardapio/{cod_Cardapio}

## Para Requisições em Funcionario

- ##### POST, GET e PATCH : 
>localhost:3000/Funcionario

- ##### DELETE:
>localhost:3000/Funcionario/{cod_Funcionario} 

##### Buscar um Cardapio epecífico:
>localhost:3000/Funcionario/{cod_Funcionario}

## Para Requisições em Item

- ##### POST, GET e PATCH : 
>localhost:3000/Item

- ##### DELETE:
>localhost:3000/Item/{cod_Item} 

- ##### Buscar um Cardapio epecífico:
>localhost:3000/Item/{cod_Item}

- ##### Buscar os itens de uma categoria:
>localhost:3000/Item/Cardapio/{cod_Cardapio}

## Para Requisições em ItemPedido

- ##### POST, GET e PATCH : 
>localhost:3000/ItemPedido

- ##### DELETE:
>localhost:3000/ItemPedido/{cod_Pedido}

- ##### Busca específica em ItemPedido:
>localhost:3000/ItemPedido/{cod_Pedido}

- ##### Buscar os Status dos pedidos:
>localhost:3000/ItemPedido/Status/{cod_Pedido}

- ##### Buscar Pedidos Pendentes:
>localhost:3000/ItemPedido/Pendente

- ##### Buscar Pedidos Concluidos:
>localhost:3000/ItemPedido/Concluido

- ##### Buscar Pedidos Entregues:
>localhost:3000/ItemPedido/Entregue

- ##### Buscar Pedidos:
>localhost:3000/ItemPedido/Pedido/{cod_Pedido}

- ##### Buscar Preço:
>localhost:3000/ItemPedido/PedidoPreco/{cod_Pedido}

## Para Requisições em Mesa

- ##### POST, GET e PATCH : 
>localhost:3000/Mesa

- ##### DELETE:
>localhost:3000/Mesa/{qr_Code} 

- ##### Buscar uma Mesa epecífica:
>localhost:3000/Mesa/{qr_Code}

## Para Requisições em Pedido

- ##### POST, GET e PATCH : 
>localhost:3000/Pedido

- ##### DELETE:
>localhost:3000/Pedido/{cod_Pedido}

- ##### Buscar um Pedido epecífico:
>localhost:3000/Pedido/{cod_Pedido}

- ##### Buscar o Status de um Pedido específico:
>localhost:3000/Pedido/Status/{cod_Pedido}

- ##### Buscar Pedidos Pendentes:
>localhost:3000/Pedido/Pendente

- ##### Buscar Pedidos Concluidos:
>localhost:3000/Pedido/Concluido

- ##### Buscar Pedidos Entregues:
>localhost:3000/Pedido/Entregue

- ##### Buscar Itens Pedidos:
>localhost:3000/Pedido/ItensPedidos