<?php

namespace DesignPattern\Venda;

use DesignPattern\Impostos\{Imposto, ISS};

class VendaDesignPatternVenda implements VendaDesignPattern
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
