<?php

namespace Observer\AcoesAoGerarPedido;

use Observer\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Observer\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void
  {
    echo "Logando o pedido gerado...\n";
  }
}
