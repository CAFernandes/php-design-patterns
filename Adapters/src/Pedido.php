<?php

namespace Adapters;

use Adapters\Orcamento;

class Pedido
{
  public int $protocolo;
  public string $nomeCliente;
  public \DateTimeInterface $dataFinalizacao;
  public Orcamento $orcamento;

  public function __construct(string $nomeCliente, Orcamento $orcamento)
  {
    $this->protocolo = rand(200000000, 600000000);
    $this->nomeCliente = $nomeCliente;
    $this->orcamento = $orcamento;
    $this->dataFinalizacao = new \DateTimeImmutable();
  }

  public function orcamentoValor(): float
  {
    return $this->orcamento->getValor();
  }
  public function orcamentoQuantidadeDeItens(): int
  {
    return $this->orcamento->getQuantidadeItens();
  }
}
