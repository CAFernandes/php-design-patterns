<?php

namespace Alura\DesignPattern\Observer\AcoesAoGerarPedido;

use Alura\DesignPattern\Observer\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Alura\DesignPattern\Observer\Pedido;

class GravarPedido implements AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void
  {
    echo "Criando o pedido no banco...\n";
  }
}
