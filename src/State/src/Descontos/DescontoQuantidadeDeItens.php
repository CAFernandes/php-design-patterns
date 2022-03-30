<?php

namespace State\Descontos;

use State\Descontos\Desconto;
use State\Orcamento;

class DescontoQuantidadeDeItens extends Desconto
{
  protected static float $porcetagemDesconto;
  public function __construct(Desconto $proximoDesconto = null)
  {
    self::$porcetagemDesconto = 0.1;
    parent::__construct($proximoDesconto);
  }
  public function desconta(Orcamento $orcamento): float
  {
    if ($orcamento->getQuantidadeItens() > 5) {
      return $orcamento->getValor() * self::$porcetagemDesconto;
    }
    return $this->proximoDesconto->desconta($orcamento);
  }
}
