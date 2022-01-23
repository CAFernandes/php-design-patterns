<?php

namespace Observer\Impostos;

use Observer\Orcamento;
use Observer\Impostos\Imposto;


class ISS implements Imposto
{
  private static $iss = 0.06;
  public function calcula(Orcamento $orcamento): float
  {
    return $orcamento->getValor() * self::$iss;
  }
}
