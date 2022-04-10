<?php

namespace Factory\Pedido;

use Factory\Orcamento\Orcamento;

class Pedido
{
  public int $protocolo;
  public Orcamento $orcamento;
  public TemplatePedido $dados;

  public function __construct(TemplatePedido $dados, Orcamento $orcamento)
  {
    $this->protocolo = rand(200000000, 600000000);
    $this->dados = $dados;
    $this->orcamento = $orcamento;
  }
  public function nomeCliente(): string
  {
    return $this->dados->nomeCliente();
  }
  public function cnpj()
  {
    return $this->dados->cnpj();
  }
  public function razaoSocial()
  {
    return $this->dados->razaoSocial();
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
  public function orcamentoImpostos(): float
  {
    return $this->orcamento->getImpostos();
  }
  public function orcamentoQuantidadeDeItens(): int
  {
    return $this->orcamento->getQuantidadeItens();
  }
  public function orcamentoListaItens(): array
  {
    return $this->orcamento->listItensOrcamento();
  }
}
