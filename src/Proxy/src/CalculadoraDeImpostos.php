<?php

namespace Proxy;

use Proxy\Orcamento;
use Proxy\Impostos\Imposto;

class CalculadoraDeImpostos
{
  public function calcula(Orcamento $orcamento, Imposto $imposto)
  {
    return $imposto->realizaCalculoEspecifico($orcamento);
  }
}
