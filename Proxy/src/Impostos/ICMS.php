<?php

namespace Proxy\Impostos;

use Proxy\Orcamento;
use Proxy\Impostos\Imposto;

class ICMS extends Imposto
{
  private static $icms = 0.01;
  public function realizaCalculoEspecifico(Orcamento $orcamento): float
  {
    return $orcamento->valor() * self::$icms;
  }
}
