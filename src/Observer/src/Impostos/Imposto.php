<?php

namespace Observer\Impostos;

use Observer\Orcamento;

interface Imposto
{
  public function calcula(Orcamento $orcamento): float;
}
