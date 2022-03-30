<?php

namespace Proxy\AcoesAoGerarPedido;

use Proxy\Pedido;

interface AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void;
}
