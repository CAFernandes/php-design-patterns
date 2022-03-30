<?php

namespace State\Descontos;

use State\Orcamento;

class DescontoValorTotal extends Desconto
{
  protected static float $porcentagemDesconto;
  public function __construct(Desconto $proximoDesconto = null)
  {
    self::$porcentagemDesconto = 0.07;
    parent::__construct($proximoDesconto);
  }
  public function desconta(Orcamento $orcamento): float
  {
    if ($orcamento->getValor() > 500) {
      return $orcamento->getValor() * self::$porcentagemDesconto;
    }
    return $this->proximoDesconto->desconta($orcamento);
  }
}
