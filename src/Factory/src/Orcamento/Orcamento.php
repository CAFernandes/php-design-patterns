<?php

namespace Factory\Orcamento;

use Factory\Orcamento\Orcavel;
use Factory\Orcamento\EstadoOrcamento\{EstadoDeUmOrcamento, EmAprovacao};

class Orcamento implements Orcavel
{
  private array $itens;
  private float $valor;
  private float $ValorImposto;
  public EstadoDeUmOrcamento $estadoAtual;

  public function __construct()
  {
    $this->estadoAtual = new EmAprovacao();
    $this->itens = [];
    $this->valor = 0;
    $this->ValorImposto = 0;
  }
  public function informaImposto(float $valor)
  {
    $this->ValorImposto = $valor;
  }
  public function getImpostos(): float
  {
    return $this->ValorImposto;
  }
  public function valor(): float
  {
    // sleep(1);
    return array_reduce(
      $this->itens,
      fn (float $valorAcumulado, Orcavel $item,) => $item->valor() + $valorAcumulado,
      0
    ) + $this->ValorImposto;
  }
  public function getQuantidadeItens(): int
  {
    return count($this->itens);
  }
  public function adicionaItem(Orcavel $item): void
  {
    $this->itens[] = $item;
    // $this->valor += $item->valor();
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
