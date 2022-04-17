<?php

namespace DesignPattern\AcoesAoGerarPedido;

use DesignPattern\Log\StdOutLogManager;
// use DesignPattern\Log\FileLogManager;
use DesignPattern\AcoesAoGerarPedido\AcaoAposGerarPedido;
use DesignPattern\Pedido\Pedido;

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
