<?php

namespace DesignPattern\Impostos;

use DesignPattern\Orcamento\Orcamento;
use DesignPattern\Impostos\Imposto;

class ICMS extends Imposto
{
  private static $icms = 0.01;
  public function realizaCalculoEspecifico(Orcamento $orcamento): float
  {
    return $orcamento->valor() * self::$icms;
  }
}
