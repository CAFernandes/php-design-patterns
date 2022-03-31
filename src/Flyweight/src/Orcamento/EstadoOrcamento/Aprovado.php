<?php

namespace Flyweight\Orcamento\EstadoOrcamento;

use Flyweight\Orcamento\Orcamento;
use Flyweight\Orcamento\EstadoOrcamento\{EstadoDeUmOrcamento, Finalizado};

class Aprovado extends EstadoDeUmOrcamento
{
  private $desconto = 0.09;
  public function __construct()
  {
    $this->estadoAtual = 'Aprovado';
  }
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    return $orcamento->valor() * $this->desconto;
  }
  public function finaliza(Orcamento $orcamento): void
  {
    $orcamento->setEstado(new Finalizado());
  }
}
