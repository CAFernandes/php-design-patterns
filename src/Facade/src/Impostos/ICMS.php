<?php

namespace Facade\Impostos;

use Facade\Orcamento;
use Facade\Impostos\Imposto;

class ICMS extends Imposto
{
  private static $icms = 0.01;
  public function realizaCalculoEspecifico(Orcamento $orcamento): float
  {
    return $orcamento->valor() * self::$icms;
  }
}
