<?php

namespace Flyweight\Pedido;

use Flyweight\AcoesAoGerarPedido\AcaoAposGerarPedido;

class GerarPedidoHandler
{
  private static Pedido $pedido;
  /** @var AcaoAposGerarPedido[] */
  private array $acoesAposGerarPedido;

  public function __construct() //recebimento das dependencias
  {
    $this->acoesAposGerarPedido = [];
  }

  public function adicionaAcao(AcaoAposGerarPedido $acao): void
  {
    $this->acoesAposGerarPedido[] = $acao;
  }

  public function execute(GerarPedidoCommand $gerarPedidoCommand): void
  {
    self::$pedido = $gerarPedidoCommand->pedido();
    foreach ($this->acoesAposGerarPedido as $acao) {
      $acao->executar(self::$pedido);
      echo '</br>';
    }
    $gerarPedidoCommand->editarStatusOrcamento('aprova');
    if (rand(0, 1) == 0) $gerarPedidoCommand->editarStatusOrcamento('finaliza');
  }
}
