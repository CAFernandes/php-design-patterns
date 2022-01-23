<?php

namespace Iterator;

use Iterator\Orcamento;
use Iterator\Impostos\Imposto;

class CalculadoraDeImpostos
{
  public function calcula(Orcamento $orcamento, Imposto $imposto)
  {
    return $imposto->calcula($orcamento);
  }
}
