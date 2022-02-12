<?php

namespace Facade\Impostos;

use Facade\Orcamento;
use Facade\Impostos\Imposto;


class ISS extends Imposto
{
  private static $iss = 0.06;
  public function realizaCalculoEspecifico(Orcamento $orcamento): float
  {
    return $orcamento->valor() * self::$iss;
  }
}
