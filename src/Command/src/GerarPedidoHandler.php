<?php

namespace Command;

use Command\{GerarPedidoCommand, Orcamento, Pedido, Item};

class GerarPedidoHandler
{
  private static Orcamento $orcamento;
  private static Pedido $pedido;

  public function __construct(
    /** PedidoRepositorym MailServices ... */
  ) //recebimento das dependencias
  {
    self::$orcamento = new Orcamento();
  }

  public function execute(GerarPedidoCommand $gerarPedidoCommand)
  {
    for ($i = 0; $i < $gerarPedidoCommand->getQuantidadeItens(); $i++) {
      self::$orcamento->adicionaItem(new Item("Item $i", $gerarPedidoCommand->getValorItem()));
    }

    self::$pedido = new Pedido($gerarPedidoCommand->getNomeCliente(), self::$orcamento);

    echo "Cria pedido no banco de dados" . PHP_EOL, "</br>";
    echo "Envia e-mail para cliente" . PHP_EOL, "</br>";
    echo '<pre>', self::$pedido, '</pre>';
  }
}
