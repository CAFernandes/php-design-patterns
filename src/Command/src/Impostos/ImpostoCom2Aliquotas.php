<?php

namespace Command\EstadoOrcamento\Impostos;

use Command\EstadoOrcamento\Impostos\Imposto;
use Command\Orcamento;

abstract class ImpostoCom2Aliquotas implements Imposto
{
  protected static float $taxaMinima;
  protected static float $taxaMaxima;
  public function calcula(Orcamento $orcamento): float
  {
    if ($this->deveAplicarTaxaMaxima($orcamento)) {
      return $this->aplicaTaxaMaxima($orcamento);
    }
    return $this->aplicaTaxaMinima($orcamento);
  }

  protected abstract function deveAplicarTaxaMaxima(Orcamento $orcamento): bool;

  protected function aplicaTaxaMaxima(Orcamento $orcamento): float
  {
    return $orcamento->getValor() * self::$taxaMaxima;
  }

  protected function aplicaTaxaMinima(Orcamento $orcamento): float
  {
    return $orcamento->getValor() * self::$taxaMinima;
  }
}
