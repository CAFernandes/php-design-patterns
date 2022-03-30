<?php

namespace Flyweight;

use Flyweight\{Orcamento, Pedido};
use Flyweight\AcoesAoGerarPedido\AcaoAposGerarPedido;

class GerarPedidoHandler
{
  private static Orcamento $orcamento;
  private static Pedido $pedido;
  /** @var AcaoAposGerarPedido[] */
  private array $acoesAposGerarPedido;

  public function __construct(
    /** PedidoRepositorym MailServices ... */
  ) //recebimento das dependencias
  {
    self::$orcamento = new Orcamento();
    $this->acoesAposGerarPedido = [];
  }

  public function adicionaAcao(AcaoAposGerarPedido $acao): void
  {
    $this->acoesAposGerarPedido[] = $acao;
  }

  public function execute(GerarPedidoCommand $gerarPedidoCommand): void
  {
    for ($i = 0; $i < $gerarPedidoCommand->getQuantidadeItens(); $i++) {
      self::$orcamento->adicionaItem(new Item("Item $i", $gerarPedidoCommand->getValorItem()));
    }

    self::$pedido = new Pedido($gerarPedidoCommand->dados(), self::$orcamento);
    foreach ($this->acoesAposGerarPedido as $acao) {
      $acao->executar(self::$pedido);
      echo '</br>';
    }
    self::$orcamento->aprova();
    if (rand(0, 1) == 0) self::$orcamento->finaliza();
  }

  public function orcamento(): Orcamento
  {
    return self::$orcamento;
  }
}