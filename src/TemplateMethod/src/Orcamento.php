<?php

namespace TemplateMethod;

class Orcamento
{
  private array $itens;

  public function __construct($itens)
  {
    $this->itens = array();
    if (is_array($itens)) {
      $this->itens = $itens;
    }
  }

  public function getValor()
  {
    $valor = 0;
    foreach ($this->itens as $item) {
      $valor += $item->getPrice();
    }
    return $valor;
  }
  public function getQuantidadeItens()
  {
    return count($this->itens);
  }
}
