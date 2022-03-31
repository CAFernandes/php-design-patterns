<?php

namespace Factory\Venda;

use Factory\Impostos\{Imposto, ISS};

class VendaFactoryVenda implements VendaFactory
{
  private string $nomePrestador;
  public function __construct(string $nomePrestador)
  {
    $this->nomePrestador = $nomePrestador;
  }
  public function criarVenda(): Venda
  {
    return new VendaServico($this->dataRealizacao, $this->nomePrestador);
  }

  public function imposto(): Imposto
  {
    return new ISS(null);
  }
}
