<?php

namespace Strategy\Impostos;

use Strategy\Orcamento;

class ICMS implements Imposto
{
  private static float $icms;
  public function __construct()
  {
    self::$icms = 0.1;
  }
  public function calcula(Orcamento $orcamento)
  {
    return $orcamento->getValor() * self::$icms;
  }
}
