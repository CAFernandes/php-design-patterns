<?php

namespace Facade\AcoesAoGerarPedido;

use Facade\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Facade\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void
  {
    echo "Logando o pedido gerado...\n";
  }
}
