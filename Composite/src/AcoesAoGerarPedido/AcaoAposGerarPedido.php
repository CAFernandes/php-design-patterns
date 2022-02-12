<?php

namespace Composite\AcoesAoGerarPedido;

use Composite\Pedido;

interface AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void;
}
