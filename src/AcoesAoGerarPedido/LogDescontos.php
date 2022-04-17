<?php

namespace DesignPattern\AcoesAoGerarPedido;

use DesignPattern\Log\StdOutLogManager;

class LogDescontos
{
  public function __construct()
  {
    $this->logger = new StdOutLogManager();
  }
  public function executar(float $valor): void
  {
    $this->logger->log('INFO', 'Desconto de ' . $valor . ' aplicado');
  }
}
