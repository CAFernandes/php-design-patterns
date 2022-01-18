<?php

namespace Alura\DesignPattern\Observer;

use Alura\DesignPattern\Observer\Orcamento;
use Alura\DesignPattern\Observer\Impostos\Imposto;

class CalculadoraDeImpostos
{
  public function calcula(Orcamento $orcamento, Imposto $imposto)
  {
    return $imposto->calcula($orcamento);
  }
}
