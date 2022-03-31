<?php

namespace Factory\Venda;

use Factory\Impostos\Imposto;

interface VendaFactory
{
  public function criarVenda(): Venda;
  public function imposto(): Imposto;
}
