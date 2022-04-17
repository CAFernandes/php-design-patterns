<?php

namespace DesignPattern\Venda;

use DesignPattern\Impostos\Imposto;

interface VendaDesignPattern
{
  public function criarVenda(): Venda;
  public function imposto(): Imposto;
}
