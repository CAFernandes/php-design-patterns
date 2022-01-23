<?php

namespace Observer\AcoesAoGerarPedido;

use Observer\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Observer\Pedido;

class EnviarEmail implements AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void
  {
    echo "Enviando o pedido por e-mail...\n";
  }
}
