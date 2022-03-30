<?php

namespace Bridge\AcoesAoGerarPedido;

use Bridge\Pedido;

interface AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void;
}
