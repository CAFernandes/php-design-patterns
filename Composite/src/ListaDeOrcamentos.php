<?php

namespace Composite;

use Composite\EstadoOrcamento\Finalizado;
use ArrayIterator;
use Traversable;

class ListaDeOrcamentos implements \IteratorAggregate
{
  /** @var Orcamento[] */
  private array $orcamentos;

  public function __construct()
  {
    $this->orcamentos = [];
  }
  public function orcamento($chave)
  {
    return isset($this->orcamento[$chave]) ? $this->orcamento[$chave] : false;
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
    return print_r($this->orcamento, true);
  }
}
