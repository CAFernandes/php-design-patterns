<?php

namespace Composite\Impostos;

use Composite\Orcamento;
use Composite\Impostos\ImpostoCom2Aliquotas;

class IKCV extends ImpostoCom2Aliquotas
{
  public function __construct()
  {
    self::$taxaMinima = 0.025;
    self::$taxaMaxima = 0.04;
  }

  protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
  {
    return $orcamento->valor() > 300 && $orcamento->getQuantidadeItens() > 3;
  }
}
