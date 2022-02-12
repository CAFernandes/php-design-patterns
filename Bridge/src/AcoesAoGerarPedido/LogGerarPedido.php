<?php

namespace Bridge\AcoesAoGerarPedido;

use Bridge\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Bridge\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void
  {
    echo "Logando o pedido gerado...\n";
  }
}
