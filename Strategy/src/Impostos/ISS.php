<?php

namespace Strategy\Impostos;

use Strategy\Orcamento;

class ISS implements Imposto
{
  private static $iss = 0.6;
  public function calcula(Orcamento $orcamento)
  {
    return $orcamento->getValor() * self::$iss;
  }
}
