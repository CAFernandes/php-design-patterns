<?php

namespace Iterator\Descontos;

use Iterator\Desconstos\Desconto;
use Iterator\Orcamento;

class SemDesconto extends Desconto
{
  protected static $porcentagemDesconto = 0;
  public function __construct(Desconto $proximoDesconto = null)
  {
    parent::__construct($proximoDesconto);
  }
  public function desconta(Orcamento $orcamento): float
  {
    return $orcamento->getValor() * self::$porcentagemDesconto;
  }
}
