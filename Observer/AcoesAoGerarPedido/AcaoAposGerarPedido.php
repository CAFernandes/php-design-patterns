<?php

namespace Alura\DesignPattern\Observer\AcoesAoGerarPedido;

use Alura\DesignPattern\Observer\Pedido;

interface AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void;
}
