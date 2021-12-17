<?php

namespace Alura\DesignPattern\Observer\Impostos;

use Alura\DesignPattern\Observer\Orcamento;
use Alura\DesignPattern\Observer\Impostos\ImpostoCom2Aliquotas;

class IKCV extends ImpostoCom2Aliquotas
{
  public function __construct()
  {
    self::$taxaMinima = 0.025;
    self::$taxaMaxima = 0.04;
  }

  protected function deveAplicarTaxaMáxima(Orcamento $orcamento): bool
  {
    return $orcamento->getValor() > 300 && $orcamento->getQuantidadeItens() > 3;
  }
}
