<?php

namespace Alura\DesignPattern\Observer\Impostos;

use Alura\DesignPattern\Observer\Orcamento;
use Alura\DesignPattern\Observer\Impostos\Imposto;


class ISS implements Imposto
{
  private static $iss = 0.06;
  public function calcula(Orcamento $orcamento)
  {
    return $orcamento->getValor() * self::$iss;
  }
}
