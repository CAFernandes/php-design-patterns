<?php

namespace State\Descontos;

use State\Orcamento;

class SemDesconto extends Desconto
{
  protected static float $porcentagemDesconto;
  public function __construct(Desconto $proximoDesconto = null)
  {
    self::$porcentagemDesconto = 0;
    parent::__construct($proximoDesconto);
  }
  public function desconta(Orcamento $orcamento): float
  {
    return $orcamento->getValor() * self::$porcentagemDesconto;
  }
}
