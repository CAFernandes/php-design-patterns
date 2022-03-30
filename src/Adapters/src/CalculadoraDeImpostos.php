<?php

namespace Adapters;

use Adapters\Orcamento;
use Adapters\Impostos\Imposto;

class CalculadoraDeImpostos
{
  public function calcula(Orcamento $orcamento, Imposto $imposto)
  {
    return $imposto->calcula($orcamento);
  }
}
