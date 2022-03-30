<?php

namespace Decorators\Impostos;

use Decorators\Orcamento;
use Decorators\Impostos\Imposto;

class ICMS extends Imposto
{
  private static $icms = 0.01;
  public function realizaCalculoEspecifico(Orcamento $orcamento): float
  {
    return $orcamento->getValor() * self::$icms;
  }
}
