<?php

namespace Decorators\Impostos;

use Decorators\Orcamento;
use Decorators\Impostos\Imposto;


class ISS extends Imposto
{
  private static $iss = 0.06;
  public function realizaCalculoEspecifico(Orcamento $orcamento): float
  {
    return $orcamento->getValor() * self::$iss;
  }
}
