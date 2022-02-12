<?php

namespace Bridge\EstadoOrcamento;

use Bridge\EstadoOrcamento\EstadoDeUmOrcamento;
use Bridge\Orcamento;

class Finalizado extends EstadoDeUmOrcamento
{
  public function __construct()
  {
    $this->estadoAtual = 'Finalizado';
  }
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    throw new \DomainException("Orçamento já está finalizado, não pode receber desconto");
  }
}
