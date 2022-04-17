<?php

namespace DesignPattern\Descontos;

use DesignPattern\Desconstos\Desconto;
use DesignPattern\Orcamento\Orcamento;

class DescontoValorTotal extends Desconto
{
  protected static $porcentagemDesconto = 0.07;
  public function __construct(Desconto $proximoDesconto = null)
  {
    parent::__construct($proximoDesconto);
  }
  public function desconta(Orcamento $orcamento): float
  {
    if ($orcamento->valor() > 500) {
      return $orcamento->valor() * self::$porcentagemDesconto;
    }
    return $this->proximoDesconto->desconta($orcamento);
  }
}
