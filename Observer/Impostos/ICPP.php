<?php

namespace Alura\DesignPattern\Observer\Impostos;

use Alura\DesignPattern\Observer\Orcamento;
use Alura\DesignPattern\Observer\Impostos\ImpostoCom2Aliquotas;

class ICPP extends ImpostoCom2Aliquotas
{

  public function __construct()
  {
    self::$taxaMinima = 0.02;
    self::$taxaMaxima = 0.03;
  }

  protected function deveAplicarTaxaMáxima(Orcamento $orcamento): bool
  {
    return $orcamento->getValor() > 500;
  }
}
