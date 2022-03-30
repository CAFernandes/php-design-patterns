<?php

namespace Iterator\AcoesAoGerarPedido;

use Iterator\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Iterator\Pedido;

class GravarPedido implements AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void
  {
    echo "Criando o pedido no banco...\n";
  }
}
