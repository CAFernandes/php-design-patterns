<?php

namespace DesignPattern\AcoesAoGerarPedido;

use DesignPattern\Pedido\Pedido;

interface AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void;
}
