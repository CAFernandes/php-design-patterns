<?php

namespace Factory\Impostos;

use Factory\Orcamento\Orcamento;
use Factory\Impostos\Imposto;


class ISS extends Imposto
{
  private static $iss = 0.06;
  public function realizaCalculoEspecifico(Orcamento $orcamento): float
  {
    return $orcamento->valor() * self::$iss;
  }
}
