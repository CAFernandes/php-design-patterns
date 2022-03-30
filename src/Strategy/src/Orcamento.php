<?php

namespace Strategy;

class Orcamento
{
  private float $valor;

  public function __construct($valor)
  {
    $this->valor = $valor;
  }

  public function getValor()
  {
    return $this->valor;
  }
}
