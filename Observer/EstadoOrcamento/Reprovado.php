<?php
namespace Alura\DesignPattern\Observer\EstadoOrcamento;

use Alura\DesignPattern\Observer\EstadoOrcamento\{EstadoDeUmOrcamento, Finalizado};
use Alura\DesignPattern\Observer\Orcamento;
use DomainException;

class Reprovado extends EstadoDeUmOrcamento
{
  public function __construct()
  {
    $this->estadoAtual = 'Reprovado';
  }
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    throw new DomainException("Or�amentos reprovados n�o recebem desconto extra");
  }

  public function finaliza(Orcamento $orcamento): void
  {
    $orcamento->setEstado(new Finalizado());
  }
}
