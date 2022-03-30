<?php

namespace Bridge;

use ArrayIterator;
use Iterator\EstadoOrcamento\Finalizado;
use Traversable;

class ListaDeOrcamentos implements \IteratorAggregate
{
  /** @var Orcamento[] */
  private array $orcamentos;

  public function __construct()
  {
    $this->orcamentos = [];
  }

  public function addOrcamento(Orcamento $orcamento): void
  {
    $this->orcamentos[] = $orcamento;
  }
  public function getIterator(): Traversable
  {
    return new ArrayIterator($this->orcamentos);
  }
  public function orcamentosFinalizados(): array
  {
    return array_filter(
      $this->orcamentos,
      fn (Orcamento $orcamento) => $orcamento->getClassEstado() instanceof Finalizado
    );
  }
  public function __toString()
  {
    print_r($this->orcamento);
  }
}
