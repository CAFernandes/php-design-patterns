<?php

namespace Factory\Impostos;

use Factory\Orcamento\Orcamento;
use Factory\Impostos\Imposto;

class ICMS extends Imposto
{
  private static $icms = 0.01;
  public function realizaCalculoEspecifico(Orcamento $orcamento): float
  {
    return $orcamento->valor() * self::$icms;
  }
}
