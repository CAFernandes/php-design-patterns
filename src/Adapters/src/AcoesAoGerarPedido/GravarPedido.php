<?php

namespace Adapters\AcoesAoGerarPedido;

use Adapters\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Adapters\Pedido;

class GravarPedido implements AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void
  {
    echo "Criando o pedido no banco...\n";
  }
}
