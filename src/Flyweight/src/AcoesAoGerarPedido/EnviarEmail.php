<?php

namespace Flyweight\AcoesAoGerarPedido;

use Flyweight\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Flyweight\Http\CurlHttpAdapter;
use Flyweight\Pedido\Pedido;
use Flyweight\Relatorio\Conteudos\{PedidoExportado, OrcamentoExportado};

class EnviarEmail implements AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void
  {
    $send = new CurlHttpAdapter();
    $pedidoExportado = new PedidoExportado($pedido);
    $orcamentoExportado = new OrcamentoExportado($pedido->orcamento);
    echo $send->post('https://my.app/sendMail', array_merge(
      $pedidoExportado->conteudo(),
      ['orcamento' => $orcamentoExportado->conteudo()]
    ));
  }
}
