<?php

namespace Facade\Relatorio\Conteudos;

use Facade\Pedido;

class PedidoExportado implements ConteudoExportado
{
  private static Pedido $pedido;
  public function __construct(Pedido $pedido)
  {
    self::$pedido = $pedido;
  }

  public function conteudo(): array
  {
    return [
      'nome_cliente' => self::$pedido->nomeCliente,
      'data_finalizacao' => self::$pedido->dataFinalizacao->format('d/m/y')
    ];
  }
}
