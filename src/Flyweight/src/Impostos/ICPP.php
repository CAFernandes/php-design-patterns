<?php

namespace Flyweight\Impostos;

use Flyweight\Orcamento;
use Flyweight\Impostos\ImpostoCom2Aliquotas;

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
