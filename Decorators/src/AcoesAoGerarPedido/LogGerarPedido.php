<?php

namespace Decorators\AcoesAoGerarPedido;

use Decorators\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Decorators\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void
  {
    echo "Logando o pedido gerado...\n";
  }
}
