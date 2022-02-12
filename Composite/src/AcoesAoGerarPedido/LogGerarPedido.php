<?php

namespace Composite\AcoesAoGerarPedido;

use Composite\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Composite\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void
  {
    echo "Logando o pedido gerado...\n";
  }
}
