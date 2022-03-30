<?php

namespace Flyweight\Descontos;

use Flyweight\Desconstos\Desconto;
use Flyweight\Orcamento;

class SemDesconto extends Desconto
{
  protected static $porcentagemDesconto = 0;
  public function __construct(Desconto $proximoDesconto = null)
  {
    parent::__construct($proximoDesconto);
  }
  public function desconta(Orcamento $orcamento): float
  {
    return $orcamento->valor() * self::$porcentagemDesconto;
  }
}
