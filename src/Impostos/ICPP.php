<?php

namespace DesignPattern\Impostos;

use DesignPattern\Orcamento\Orcamento;
use DesignPattern\Impostos\ImpostoCom2Aliquotas;

class ICPP extends ImpostoCom2Aliquotas
{

  public function __construct()
  {
    self::$taxaMinima = 0.02;
    self::$taxaMaxima = 0.03;
  }

  protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
  {
    return $orcamento->valor() > 500;
  }
}
