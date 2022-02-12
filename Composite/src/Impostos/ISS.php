<?php

namespace Composite\Impostos;

use Composite\Orcamento;
use Composite\Impostos\Imposto;


class ISS extends Imposto
{
  private static $iss = 0.06;
  public function realizaCalculoEspecifico(Orcamento $orcamento): float
  {
    return $orcamento->valor() * self::$iss;
  }
}
