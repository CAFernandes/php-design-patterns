<?php

namespace Command;

use Command\EstadoOrcamento\Impostos\Imposto;
use Command\Orcamento;

class CalculadoraDeImpostos
{
  public function calcula(Orcamento $orcamento, Imposto $imposto)
  {
    return $imposto->calcula($orcamento);
  }
}
