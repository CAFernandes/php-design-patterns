<?php

require_once 'Imposto.php';


class ISS implements Imposto
{
  private static $iss = 0.6;
  public function calcula(Orcamento $orcamento)
  {
    return $orcamento->getValor() * self::$iss;
  }
}
