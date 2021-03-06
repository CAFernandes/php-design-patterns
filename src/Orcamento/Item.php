<?php

namespace DesignPattern\Orcamento;

use DesignPattern\Orcamento\Orcavel;

class Item implements Orcavel
{
  private string $name;
  private float $price;

  public function __construct(string $name, float $price)
  {
    $this->name = $name;
    $this->price = $price;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function valor(): float
  {
    return $this->price;
  }
}
