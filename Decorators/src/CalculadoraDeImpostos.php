<?php

namespace Decorators;

use Decorators\Orcamento;
use Decorators\Impostos\Imposto;

class CalculadoraDeImpostos
{
  public function calcula(Orcamento $orcamento, Imposto $imposto)
  {
    return $imposto->calcula($orcamento);
  }
}
