<?php

namespace Proxy\AcoesAoGerarPedido;

use Proxy\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Proxy\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void
  {
    echo "Logando o pedido gerado...\n";
  }
}
