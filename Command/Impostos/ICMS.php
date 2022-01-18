<?php

require_once 'Imposto.php';

class ICMS implements Imposto
{
  private static $icms = 0.01;
  public function calcula(Orcamento $orcamento)
  {
    return $orcamento->getValor() * self::$icms;
  }
}
