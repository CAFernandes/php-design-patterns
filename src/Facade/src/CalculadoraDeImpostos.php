<?php

namespace Facade;

use Facade\Orcamento;
use Facade\Impostos\Imposto;

class CalculadoraDeImpostos
{
  public function calcula(Orcamento $orcamento, Imposto $imposto)
  {
    return $imposto->realizaCalculoEspecifico($orcamento);
  }
}
