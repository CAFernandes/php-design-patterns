<?php

namespace Factory\AcoesAoGerarPedido;

use Factory\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Factory\Http\CurlHttpAdapter;
use Factory\Pedido\Pedido;
use Factory\Relatorio\Conteudos\{PedidoExportado, OrcamentoExportado};

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
