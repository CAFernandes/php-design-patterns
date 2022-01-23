<?php

namespace Iterator\Impostos;

use Iterator\Orcamento;
use Iterator\Impostos\Imposto;

class ICMS implements Imposto
{
  private static $icms = 0.01;
  public function calcula(Orcamento $orcamento): float
  {
    return $orcamento->getValor() * self::$icms;
  }
}
