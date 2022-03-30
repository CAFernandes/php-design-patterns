<?php

namespace Proxy;

use Proxy\Orcamento;

class Pedido
{
  public int $protocolo;
  public string $nomeCliente;
  public \DateTimeInterface $dataFinalizacao;
  public Orcamento $orcamento;
  public CacheOrcamentoProxy $proxyOrcamento;

  public function __construct(string $nomeCliente, Orcamento $orcamento)
  {
    $this->protocolo = rand(200000000, 600000000);
    $this->nomeCliente = $nomeCliente;
    $this->orcamento = $orcamento;
    $this->dataFinalizacao = new \DateTimeImmutable();
    $this->proxyOrcamento = new CacheOrcamentoProxy($this->orcamento);
  }
  public function informaImposto(float $valor): void
  {
    $this->orcamento->informaImposto($valor);
  }
  public function orcamentoValor(): float
  {
    return $this->proxyOrcamento->valor();
  }
  public function orcamentoQuantidadeDeItens(): int
  {
    return $this->orcamento->getQuantidadeItens();
  }
}
