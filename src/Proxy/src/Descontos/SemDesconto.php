<?php

namespace Proxy\Descontos;

use Proxy\Desconstos\Desconto;
use Proxy\Orcamento;

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
