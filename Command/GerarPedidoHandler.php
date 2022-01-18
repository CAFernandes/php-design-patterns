<?php

class GerarPedidoHandler
{
  private static $orcamento;
  private static $pedido;

  public function __construct(/** PedidoRepositorym MailServices ... */) //recebimento das dependencias
  {
    self::$orcamento = new Orcamento();
  }

  public function execute(GerarPedidoCommand $gerarPedidoCommand)
  {
    for ($i = 0; $i < $gerarPedidoCommand->getQuantidadeItens(); $i++) {
      self::$orcamento->adicionaItem(new Item("Item $i", $gerarPedidoCommand->getValorItem()));
    }

    self::$pedido = new Pedido($gerarPedidoCommand->getNomeCliente(), self::$orcamento);

    echo "Cria pedido no banco de dados".PHP_EOL;
    echo "Envia e-mail para cliente".PHP_EOL;
    echo '<pre>', print_r(self::$pedido, true), '</pre>';
  }
}
