<?php

namespace ChainsOfResponsibility\Descontos;

use ChainsOfResponsibility\Orcamento;

abstract class Desconto
{
  public function __construct(?Desconto $proximoDesconto)
  {
    $this->proximoDesconto = $proximoDesconto;
  }
  abstract public function desconta(Orcamento $orcamento): float;
}
