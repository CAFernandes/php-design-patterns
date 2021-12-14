<?php

require_once 'Desconto.php';
require_once dirname(__DIR__, 1) . '\Orcamento.php';


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
