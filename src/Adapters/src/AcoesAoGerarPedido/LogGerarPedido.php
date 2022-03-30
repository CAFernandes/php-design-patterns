<?php

namespace Adapters\AcoesAoGerarPedido;

use Adapters\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Adapters\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void
  {
    echo "Logando o pedido gerado...\n";
  }
}
