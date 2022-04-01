<?php

namespace Factory\AcoesAoGerarPedido;

use Factory\Log\StdOutLogManager;
// use Factory\Log\FileLogManager;
use Factory\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Factory\Pedido\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
  public function __construct()
  {
    $this->logger = new StdOutLogManager();
  }
  public function executar(Pedido $pedido): void
  {
    $this->logger->log('INFO', 'Pedido gerado com sucesso. Valor Pedido:' . $pedido->orcamentoValor() . PHP_EOL);
  }
}
