<?php

namespace Adapters;

use Adapters\EstadoOrcamento\{EstadoDeUmOrcamento, EmAprovacao};

class Orcamento
{
  private array $itens;
  private float $valor;
  public EstadoDeUmOrcamento $estadoAtual;

  public function __construct()
  {
    $this->estadoAtual = new EmAprovacao();
    $this->valor = 0;
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
  public function estado(): string
  {
    return $this->estadoAtual->getEstado();
  }
  public function getClassEstado(): string
  {
    return get_class($this->estadoAtual);
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
