<?php

namespace Proxy;

class CacheOrcamentoProxy extends Orcamento
{
  private float $valor = 0;
  private Orcamento $orcamento;
  public function __construct(Orcamento $orcamento)
  {
    $this->orcamento = $orcamento;
  }
  public function valor(): float
  {
    if ($this->valor == 0) $this->valor = $this->orcamento->valor();
    return $this->valor;
  }
  public function adicionaItem(Orcavel $item): void
  {
    throw new \DomainException('Não é possível adicionar item a orçamento cacheavel');
  }
}
