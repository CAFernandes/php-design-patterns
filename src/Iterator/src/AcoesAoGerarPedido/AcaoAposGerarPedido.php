<?php

namespace Iterator\AcoesAoGerarPedido;

use Iterator\Pedido;

interface AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void;
}
