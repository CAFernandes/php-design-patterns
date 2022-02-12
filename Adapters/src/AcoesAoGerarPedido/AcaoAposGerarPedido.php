<?php

namespace Adapters\AcoesAoGerarPedido;

use Adapters\Pedido;

interface AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void;
}
