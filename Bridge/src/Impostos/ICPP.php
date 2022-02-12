<?php

namespace Bridge\Impostos;

use Bridge\Orcamento;
use Bridge\Impostos\ImpostoCom2Aliquotas;

class ICPP extends ImpostoCom2Aliquotas
{

  public function __construct()
  {
    self::$taxaMinima = 0.02;
    self::$taxaMaxima = 0.03;
  }

  protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
  {
    return $orcamento->getValor() > 500;
  }
}
