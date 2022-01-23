<?php

namespace TemplateMethod\Impostos;

use TemplateMethod\Orcamento;

class ISS implements Imposto
{
  private static $iss = 0.06;
  public function calcula(Orcamento $orcamento)
  {
    return $orcamento->getValor() * self::$iss;
  }
}
