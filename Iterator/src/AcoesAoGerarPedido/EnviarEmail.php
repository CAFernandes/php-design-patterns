<?php

namespace Iterator\AcoesAoGerarPedido;

use Iterator\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Iterator\Pedido;

class EnviarEmail implements AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void
  {
    echo "Enviando o pedido por e-mail...\n";
  }
}
