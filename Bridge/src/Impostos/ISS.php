<?php

namespace Bridge\Impostos;

use Bridge\Orcamento;
use Bridge\Impostos\Imposto;


class ISS implements Imposto
{
  private static $iss = 0.06;
  public function calcula(Orcamento $orcamento): float
  {
    return $orcamento->getValor() * self::$iss;
  }
}
