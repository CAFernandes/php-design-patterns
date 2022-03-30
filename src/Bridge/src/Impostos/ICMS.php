<?php

namespace Bridge\Impostos;

use Bridge\Orcamento;
use Bridge\Impostos\Imposto;

class ICMS implements Imposto
{
  private static $icms = 0.01;
  public function calcula(Orcamento $orcamento): float
  {
    return $orcamento->getValor() * self::$icms;
  }
}
