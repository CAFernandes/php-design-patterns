<?php

namespace Facade\AcoesAoGerarPedido;

use Facade\Pedido;

interface AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void;
}
