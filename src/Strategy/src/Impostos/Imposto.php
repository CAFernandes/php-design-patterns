<?php

namespace Strategy\Impostos;

use Strategy\Orcamento;

interface Imposto
{
  public function calcula(Orcamento $orcamento);
}
