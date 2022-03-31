<?php

namespace Factory\AcoesAoGerarPedido;

use Factory\Pedido\Pedido;

interface AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void;
}
