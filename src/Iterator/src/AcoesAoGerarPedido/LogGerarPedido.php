<?php

namespace Iterator\AcoesAoGerarPedido;

use Iterator\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Iterator\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void
  {
    echo "Logando o pedido gerado...\n";
  }
}
