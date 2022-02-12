<?php

namespace Bridge\Impostos;

use Bridge\Orcamento;

interface Imposto
{
  public function calcula(Orcamento $orcamento): float;
}
