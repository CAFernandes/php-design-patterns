<?php

namespace Alura\DesignPattern\Observer\AcoesAoGerarPedido;

use Alura\DesignPattern\Observer\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Alura\DesignPattern\Observer\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void
  {
    echo "Logando o pedido gerado...\n";
  }
}
