<?php

namespace Adapters;

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
    // $finalizados = [];
    // foreach ($this->orcamentos as $orcamento) {
    //   if ($orcamento->getClassEstado() == get_class(new Finalizado)) {
    //     $finalizados[]  = $orcamento;
    //   }
    // }
    // return $finalizados;
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
