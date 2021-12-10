<?php

require_once dirname(__DIR__, 1) . '\Orcamento.php';
require_once 'EstadoDeUmOrcamento.php';
require_once 'Finalizado.php';

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
