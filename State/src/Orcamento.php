<?php

namespace State;

use State\EstadoOrcamento\{EstadoDeUmOrcamento, EmAprovacao};

class Orcamento
{
  private array $itens;
  private float $valor;
  private EstadoDeUmOrcamento $estadoAtual;

  public function __construct(array $itens)
  {
    $this->valor = 0;
    $this->estadoAtual = new EmAprovacao();
    foreach ($itens as $item) {
      $this->adicionaItem($item);
    }
  }
  public function getValor(): float
  {
    return $this->valor;
  }
  public function getQuantidadeItens(): int
  {
    return count($this->itens);
  }
  public function adicionaItem(Item $item): void
  {
    $this->itens[] = $item;
    $this->valor += $item->getPrice();
  }
  public function setEstado(EstadoDeUmOrcamento $estado): void
  {
    $this->estadoAtual = $estado;
  }
  public function aplicaDescontoExtra(): void
  {
    try {
      $this->valor -= $this->estadoAtual->calculaDescontoExtra($this);
    } catch (\DomainException $e) {
      $this->valor = $this->valor;
    }
  }
  public function aprova(): void
  {
    $this->estadoAtual->aprova($this);
  }
  public function reprova(): void
  {
    $this->estadoAtual->reprova($this);
  }
  public function finaliza(): void
  {
    $this->estadoAtual->finaliza($this);
  }
}
