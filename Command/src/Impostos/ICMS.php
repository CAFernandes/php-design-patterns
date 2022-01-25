<?php

namespace Command\EstadoOrcamento\Impostos;

use Command\EstadoOrcamento\Impostos\Imposto;
use Command\Orcamento;

class ICMS implements Imposto
{
  private static float $icms;
  public function __construct()
  {
    self::$icms = 0.01;
  }
  public function calcula(Orcamento $orcamento): float
  {
    return $orcamento->getValor() * self::$icms;
  }
}
