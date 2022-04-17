<?php

namespace DesignPattern\Venda;

use DesignPattern\Impostos\{Imposto, ICMS};

class VendaProdutoDesignPattern implements VendaDesignPattern
{
  private int $pesoProduto;
  public function __construct(int $pesoProduto)
  {
    $this->pesoProduto = $pesoProduto;
  }
  public function criarVenda(): Venda
  {
    return new VendaProduto($this->dataRealizacao, $this->pesoProduto);
  }

  public function imposto(): Imposto
  {
    return new ICMS(null);
  }
}
