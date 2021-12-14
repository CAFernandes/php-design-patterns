<?php

require_once dirname(__DIR__, 1) . '\Orcamento.php';
require_once 'EstadoDeUmOrcamento.php';

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
