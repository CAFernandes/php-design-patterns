<?php

namespace Command\EstadoOrcamento;

use Command\Orcamento;
use Command\EstadoOrcamento\{EstadoDeUmOrcamento, Finalizado};

class Reprovado extends EstadoDeUmOrcamento
{
  public function __construct()
  {
    $this->estadoAtual = 'Reprovado';
  }
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    throw new Exception("Orçamentos reprovados não recebem desconto extra");
  }

  public function finaliza(Orcamento $orcamento): void
  {
    $orcamento->setEstado(new Finalizado());
  }
}
