<?php
require_once __DIR__ . '/vendor/autoload.php';


use Observer\{GerarPedidoCommand, GerarPedidoHandler};
use Observer\AcoesAoGerarPedido\{EnviarEmail, GravarPedido, LogGerarPedido};

$valor = 1234.56;
$quantidadeItens = 7;
$nomeCliente = 'Caio Fernandes';

$gerarPedidoCommand = new GerarPedidoCommand($valor, $quantidadeItens, $nomeCliente);

$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->adicionaAcao(new GravarPedido());
$gerarPedidoHandler->adicionaAcao(new EnviarEmail());
$gerarPedidoHandler->adicionaAcao(new LogGerarPedido());

$gerarPedidoHandler->execute($gerarPedidoCommand);
