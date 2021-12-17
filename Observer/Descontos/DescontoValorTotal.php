<?php

namespace Alura\DesignPattern\Observer\Descontos;

use Alura\DesignPattern\Observer\Desconstos\Desconto;
use Alura\DesignPattern\Observer\Orcamento;

class DescontoValorTotal extends Desconto
{
  protected static $porcentagemDesconto = 0.07;
  public function __construct(Desconto $proximoDesconto = null)
  {
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
