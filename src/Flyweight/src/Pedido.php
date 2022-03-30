<?php

namespace Flyweight;

use Flyweight\{Orcamento, DadosExtrinsecosPedido};

class Pedido
{
  public int $protocolo;
  public Orcamento $orcamento;
  public DadosExtrinsecosPedido $dados;
  // public CacheOrcamentoProxy $FlyweightOrcamento;

  public function __construct(DadosExtrinsecosPedido $dados, Orcamento $orcamento)
  {
    $this->protocolo = rand(200000000, 600000000);
    $this->dados = $dados;
    // $this->nomeCliente = $nomeCliente;
    $this->orcamento = $orcamento;
    // $this->dataFinalizacao = new \DateTimeImmutable();
    // $this->FlyweightOrcamento = new CacheOrcamentoProxy($this->orcamento);
  }
  public function nomeCliente(): string
  {
    return $this->dados->nomeCliente();
  }
  public function dataFinalizacao(string $formato): string
  {
    return $this->dados->dataFinalizacao()->format($formato);
  }
  public function informaImposto(float $valor): void
  {
    $this->orcamento->informaImposto($valor);
  }
  public function orcamentoValor(): float
  {
    return $this->orcamento->valor();
  }
  public function orcamentoQuantidadeDeItens(): int
  {
    return $this->orcamento->getQuantidadeItens();
  }
}
