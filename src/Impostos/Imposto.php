<?php

namespace DesignPattern\Impostos;

use DesignPattern\Orcamento\Orcamento;

abstract class Imposto
{
  private ?Imposto $outroImposto;

  public function __construct(?Imposto $outroImposto)
  {
    $this->outroImposto = $outroImposto;
  }

  abstract public function realizaCalculoEspecifico(Orcamento $orcamento): float;

  public function calculaImposto(Orcamento $orcamento): float
  {
    return $this->realizaCalculoEspecifico($orcamento) + $this->outroImposto->realizaCalculoDeOutroImposto($orcamento);
  }

  private function realizaCalculoDeOutroImposto(Orcamento $orcamento): float
  {
    return is_null($this->outroImposto) ? 0 : $this->outroImposto->calculaImposto($orcamento);
  }
}
