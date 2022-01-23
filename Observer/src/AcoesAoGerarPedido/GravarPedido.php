<?php

namespace Observer\AcoesAoGerarPedido;

use Observer\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Observer\Pedido;

class GravarPedido implements AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void
  {
    echo "Criando o pedido no banco...\n";
  }
}
