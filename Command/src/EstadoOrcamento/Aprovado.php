<?php

namespace Command\EstadoOrcamento;

use Command\Orcamento;
use Command\EstadoOrcamento\EstadoDeUmOrcamento;

class Aprovado extends EstadoDeUmOrcamento
{
  private $desconto = 0.09;
  public function __construct()
  {
    $this->estadoAtual = 'Aprovado';
  }
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    return $orcamento->getValor() * $this->desconto;
  }
  public function finaliza(Orcamento $orcamento): void
  {
    $orcamento->setEstado(new Finalizado());
  }
}
