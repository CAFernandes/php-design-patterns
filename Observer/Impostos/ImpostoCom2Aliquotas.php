<?php

namespace Alura\DesignPattern\Observer\Impostos;

use Alura\DesignPattern\Observer\Orcamento;
use Alura\DesignPattern\Observer\Impostos\Imposto;

abstract class ImpostoCom2Aliquotas implements Imposto
{
  protected static $taxaMinima = 0;
  protected static $taxaMaxima = 0;
  public function calcula(Orcamento $orcamento)
  {
    if ($this->deveAplicarTaxaMáxima($orcamento)) {
      return $this->aplicaTaxaMaxima($orcamento);
    }
    return $this->aplicaTaxaMinima($orcamento);
  }

  protected abstract function deveAplicarTaxaMáxima(Orcamento $orcamento): bool;

  protected function aplicaTaxaMaxima(Orcamento $orcamento): float
  {
    return $orcamento->getValor() * self::$taxaMaxima;
  }

  protected function aplicaTaxaMinima(Orcamento $orcamento): float
  {
    return $orcamento->getValor() * self::$taxaMinima;
  }
}
