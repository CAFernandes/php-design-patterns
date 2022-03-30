<?php

namespace Flyweight\EstadoOrcamento;

use Flyweight\EstadoOrcamento\{EstadoDeUmOrcamento, Finalizado};
use Flyweight\Orcamento;

class Reprovado extends EstadoDeUmOrcamento
{
  public function __construct()
  {
    $this->estadoAtual = 'Reprovado';
  }
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    throw new \DomainException("Orçamentos reprovados não recebem desconto extra");
  }

  public function finaliza(Orcamento $orcamento): void
  {
    $orcamento->setEstado(new Finalizado());
  }
}
