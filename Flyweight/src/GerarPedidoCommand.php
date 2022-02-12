<?php

namespace Flyweight;

class GerarPedidoCommand
{
  private float $valorOrcamento;
  private int $quantidadeItens;
  private DadosExtrinsecosPedido $dados;

  public function __construct(float $valorOrcamento, int $quantidadeItens, DadosExtrinsecosPedido $dados)
  {
    $this->valorOrcamento = $valorOrcamento;
    $this->quantidadeItens = $quantidadeItens;
    $this->dados = $dados;
  }

  public function getQuantidadeItens(): int
  {
    return $this->quantidadeItens;
  }
  public function getValorItem(): float
  {
    return $this->valorOrcamento / $this->quantidadeItens;
  }
  public function dados(): DadosExtrinsecosPedido
  {
    return $this->dados;
  }
}
