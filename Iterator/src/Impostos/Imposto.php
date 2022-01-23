<?php

namespace Iterator\Impostos;

use Iterator\Orcamento;

interface Imposto
{
  public function calcula(Orcamento $orcamento): float;
}
