<?php

namespace DesignPattern\Impostos;

use DesignPattern\Orcamento\Orcamento;
use DesignPattern\Impostos\Imposto;

abstract class ImpostoCom2Aliquotas extends Imposto
{
  protected static $taxaMinima = 0;
  protected static $taxaMaxima = 0;
  public function realizaCalculoEspecifico(Orcamento $orcamento): float
  {
    if ($this->deveAplicarTaxaMaxima($orcamento)) {
      return $this->aplicaTaxaMaxima($orcamento);
    }
    return $this->aplicaTaxaMinima($orcamento);
  }

  protected abstract function deveAplicarTaxaMaxima(Orcamento $orcamento): bool;

  protected function aplicaTaxaMaxima(Orcamento $orcamento): float
  {
    return $orcamento->valor() * self::$taxaMaxima;
  }

  protected function aplicaTaxaMinima(Orcamento $orcamento): float
  {
    return $orcamento->valor() * self::$taxaMinima;
  }
}
