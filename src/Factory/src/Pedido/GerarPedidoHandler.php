<?php

namespace Factory\Pedido;

use Factory\AcoesAoGerarPedido\AcaoAposGerarPedido;

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
    echo '<dl>';
    foreach ($this->acoesAposGerarPedido as $acao) {
      $action = explode('\\', get_class($acao));
      echo '<dt>', $action[count($action) - 1], ' Resultado: </dt>';
      echo '<dd>';
      $acao->executar(self::$pedido);
      echo '</dd>';
    }
    echo '</dl></br>';

    $gerarPedidoCommand->editarStatusOrcamento('aprova');
    if (rand(0, 1) == 0) $gerarPedidoCommand->editarStatusOrcamento('finaliza');
  }
}
