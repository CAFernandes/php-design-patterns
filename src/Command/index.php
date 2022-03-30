<?php
require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

use Command\{GerarPedidoCommand, GerarPedidoHandler};


$valor = 1234.56;
$quantidadeItens = 7;
$nomeCliente = 'Caio Fernandes';

$gerarPedidoCommand = new GerarPedidoCommand($valor, $quantidadeItens, $nomeCliente);

$gerarPedidoHandler = new GerarPedidoHandler(/* passaria as dependencias aqui */);

$gerarPedidoHandler->execute($gerarPedidoCommand);
