<?php

namespace Command\EstadoOrcamento\Impostos;

use Command\EstadoOrcamento\Impostos\Imposto;
use Command\Orcamento;

class ISS implements Imposto
{
  private static $iss = 0.06;
  public function calcula(Orcamento $orcamento): float
  {
    return $orcamento->getValor() * self::$iss;
  }
}
