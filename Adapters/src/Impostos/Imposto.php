<?php

namespace Adapters\Impostos;

use Adapters\Orcamento;

interface Imposto
{
  public function calcula(Orcamento $orcamento): float;
}
