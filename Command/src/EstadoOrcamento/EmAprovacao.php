<?php

namespace Command\EstadoOrcamento;

use Command\Orcamento;
use Command\EstadoOrcamento\{EstadoDeUmOrcamento, Aprovado, Reprovado};

class EmAprovacao extends EstadoDeUmOrcamento
{
  private float $desconto;

  public function __construct()
  {
    $this->desconto = 0.05;
    $this->estadoAtual = 'Em aprovação';
  }

  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    return $orcamento->getValor() * $this->desconto;
  }
  public function aprova(Orcamento $orcamento): void
  {
    $orcamento->setEstado(new Aprovado());
  }

  public function reprova(Orcamento $orcamento): void
  {
    $orcamento->setEstado(new Reprovado());
  }
}
