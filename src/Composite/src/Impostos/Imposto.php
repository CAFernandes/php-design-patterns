<?php

namespace Composite\Impostos;

use Composite\Orcamento;

abstract class Imposto
{
  private ?Imposto $outroImposto;

  public function __construct(Imposto $outroImposto)
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
    return isset($this->outroImposto) ? 0 : $this->outroImposto->calculaImposto($orcamento);
  }
}
