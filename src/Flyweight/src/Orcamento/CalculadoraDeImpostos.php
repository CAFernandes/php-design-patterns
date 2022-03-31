<?php

namespace Flyweight\Orcamento;

use Flyweight\Orcamento\Orcamento;
use Flyweight\Impostos\Imposto;

class CalculadoraDeImpostos
{
  public function calcula(Orcamento $orcamento, Imposto $imposto)
  {
    return $imposto->realizaCalculoEspecifico($orcamento);
  }
}
