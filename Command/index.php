<?php
spl_autoload_register(function ($class) {
  $dirs = array(
    __DIR__,
    __DIR__ . '/Impostos/'
  );
  foreach ($dirs as $dir) {
    if (file_exists("{$dir}/{$class}.php")) {
      include_once("{$dir}/{$class}.php");
    }
  }
});

$valor = 1234.56;
$quantidadeItens = 7;
$nomeCliente = 'Caio Fernandes';

$gerarPedidoCommand = new GerarPedidoCommand($valor, $quantidadeItens, $nomeCliente);

$gerarPedidoHandler = new GerarPedidoHandler(/* passaria as dependencias aqui */);

$gerarPedidoHandler->execute($gerarPedidoCommand);

