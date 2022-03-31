<?php

namespace Factory\Venda;

class VendaProduto extends Venda
{
  private int $pesoProduto;

  public function __construct(\DateTimeInterface $dataRealizacao, int $pesoProduto)
  {
    parent::__construct($dataRealizacao);
    $this->pesoProduto = $pesoProduto;
  }
}
