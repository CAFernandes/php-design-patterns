<?php

namespace Decorators\AcoesAoGerarPedido;

use Decorators\Pedido;

interface AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void;
}
