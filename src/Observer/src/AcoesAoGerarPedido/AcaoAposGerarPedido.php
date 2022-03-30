<?php

namespace Observer\AcoesAoGerarPedido;

use Observer\Pedido;

interface AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void;
}
