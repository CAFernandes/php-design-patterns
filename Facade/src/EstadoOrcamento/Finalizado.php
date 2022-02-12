<?php

namespace Facade\EstadoOrcamento;

use Facade\EstadoOrcamento\EstadoDeUmOrcamento;
use Facade\Orcamento;

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
