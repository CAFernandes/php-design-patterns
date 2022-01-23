<?php

namespace TemplateMethod\Impostos;

use TemplateMethod\Orcamento;

interface Imposto
{
  public function calcula(Orcamento $orcamento);
}
