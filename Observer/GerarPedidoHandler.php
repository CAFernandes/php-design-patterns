<?php

namespace Alura\DesignPattern\Observer;

use Alura\DesignPattern\Observer\Orcamento;
use Alura\DesignPattern\Observer\Pedido;
use Alura\DesignPattern\Observer\AcoesAoGerarPedido\AcaoAposGerarPedido;

class GerarPedidoHandler
{
  private static $orcamento;
  private static $pedido;
  /** @var AcaoAposGerarPedido[] */
  private array $acoesAposGerarPedido = [];

  public function __construct(
    /** PedidoRepositorym MailServices ... */
  ) //recebimento das dependencias
  {
    self::$orcamento = new Orcamento();
  }

  public function adicionaAcao(AcaoAposGerarPedido $acao)
  {
    $this->acoesAposGerarPedido[] = $acao;
  }

  public function execute(GerarPedidoCommand $gerarPedidoCommand)
  {
    for ($i = 0; $i < $gerarPedidoCommand->getQuantidadeItens(); $i++) {
      self::$orcamento->adicionaItem(new Item("Item $i", $gerarPedidoCommand->getValorItem()));
    }

    self::$pedido = new Pedido($gerarPedidoCommand->getNomeCliente(), self::$orcamento);
    foreach ($this->acoesAposGerarPedido as $acao) {
      $acao->executar(self::$pedido);
      echo '</br>';
    }
  }
}
