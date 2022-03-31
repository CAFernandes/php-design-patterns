<?php

namespace Factory\Orcamento;

use Factory\Orcamento\Orcamento;
use Factory\Impostos\Imposto;

class CalculadoraDeImpostos
{
  public function calcula(Orcamento $orcamento, Imposto $imposto)
  {
    return $imposto->realizaCalculoEspecifico($orcamento);
  }
}
