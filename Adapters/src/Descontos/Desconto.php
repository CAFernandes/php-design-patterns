<?php

namespace Adapters\Desconstos;

use Adapters\Orcamento;

abstract class Desconto
{
  public function __construct(?Desconto $proximoDesconto)
  {
    $this->proximoDesconto = $proximoDesconto;
  }
  abstract public function desconta(Orcamento $orcamento): float;
}
