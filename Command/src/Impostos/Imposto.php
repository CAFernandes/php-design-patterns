<?php

namespace Command\EstadoOrcamento\Impostos;

use Command\Orcamento;

interface Imposto
{
  public function calcula(Orcamento $orcamento): float;
}
