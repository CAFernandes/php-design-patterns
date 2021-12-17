<?php

namespace Alura\DesignPattern\Observer\Desconstos;

use Alura\DesignPattern\Observer\Orcamento;

abstract class Desconto
{
  public function __construct(?Desconto $proximoDesconto)
  {
    $this->proximoDesconto = $proximoDesconto;
  }
  abstract public function desconta(Orcamento $orcamento): float;
}
