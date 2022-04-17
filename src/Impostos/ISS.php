<?php

namespace DesignPattern\Impostos;

use DesignPattern\Orcamento\Orcamento;
use DesignPattern\Impostos\Imposto;


class ISS extends Imposto
{
  private static $iss = 0.06;
  public function realizaCalculoEspecifico(Orcamento $orcamento): float
  {
    return $orcamento->valor() * self::$iss;
  }
}
