<?php

namespace Flyweight\AcoesAoGerarPedido;

use Flyweight\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Flyweight\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void
  {
    echo "Logando o pedido gerado...\n";
  }
}
