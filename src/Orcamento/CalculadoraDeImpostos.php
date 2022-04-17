<?php

namespace DesignPattern\Orcamento;

use DesignPattern\Orcamento\Orcamento;
use DesignPattern\Impostos\Imposto;

class CalculadoraDeImpostos
{
  public function calcula(Orcamento $orcamento, Imposto $imposto)
  {
    return $imposto->realizaCalculoEspecifico($orcamento);
  }
}
