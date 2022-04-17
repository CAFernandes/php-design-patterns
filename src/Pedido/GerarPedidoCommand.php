<?php

namespace DesignPattern\Pedido;

use DesignPattern\Orcamento\{Item, Orcamento};
use DesignPattern\Pedido\{CriadorDePedido, TemplatePedido};

class GerarPedidoCommand
{
  private float $valorOrcamento;
  private int $quantidadeItens;
  private Orcamento $orcamento;
  private CriadorDePedido $criadorDePedido;

  public function __construct(float $valorOrcamento, int $quantidadeItens, string $nomeCliente, CriadorDePedido $criadorDePedido)
  {
    $this->valorOrcamento = $valorOrcamento;
    $this->quantidadeItens = $quantidadeItens;
    $this->nomeCliente = $nomeCliente;
    $this->criadorDePedido = $criadorDePedido;
    $this->criarOrcamento();
  }

  public function pedido(): Pedido
  {
    return $this->criadorDePedido->criarPedido($this->nomeCliente, date('y-m-d'), $this->orcamento());
  }
  public function editarStatusOrcamento(string $atualiza): void
  {
    if (!method_exists($this->orcamento, $atualiza)) throw new \DomainException('Atualização de Status Inváida');
    $this->orcamento->$atualiza();
  }
  public function orcamento(): Orcamento
  {
    return $this->orcamento;
  }
  private function criarOrcamento(): void
  {
    $this->orcamento = new Orcamento();
    $valorItem = $this->getValorItem();
    for ($i = 0; $i < $this->getQuantidadeItens(); $i++) {
      $this->orcamento->adicionaItem(new Item("Item $i", $valorItem));
    }
  }
  private function getQuantidadeItens(): int
  {
    return $this->quantidadeItens;
  }
  private function getValorItem(): float
  {
    return $this->valorOrcamento / $this->quantidadeItens;
  }
}
