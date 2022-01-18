<?php

require_once 'ImpostoCom2Aliquotas.php';

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
