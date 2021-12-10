<?php

require_once 'Desconto.php';
require_once dirname(__DIR__, 1) . '\Orcamento.php';

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
