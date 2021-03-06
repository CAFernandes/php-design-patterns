<?php

namespace DesignPattern\Orcamento\EstadoOrcamento;

use DesignPattern\Orcamento\EstadoOrcamento\EstadoDeUmOrcamento;
use DesignPattern\Orcamento\Orcamento;

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
