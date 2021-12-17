<?php
namespace Alura\DesignPattern\Observer\EstadoOrcamento;

use Alura\DesignPattern\Observer\EstadoOrcamento\EstadoDeUmOrcamento;
use Alura\DesignPattern\Observer\Orcamento;

class Finalizado extends EstadoDeUmOrcamento
{
  public function __construct()
  {
    $this->estadoAtual = 'Finalizado';
  }
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    throw new \DomainException("Or�amento j� est� finalizado, n�o pode receber desconto");
  }
}
