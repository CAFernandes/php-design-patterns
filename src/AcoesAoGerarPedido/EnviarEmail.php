<?php

namespace DesignPattern\AcoesAoGerarPedido;

use DesignPattern\AcoesAoGerarPedido\AcaoAposGerarPedido;
use DesignPattern\Http\CurlHttpAdapter;
use DesignPattern\Pedido\Pedido;
use DesignPattern\Relatorio\Conteudos\{PedidoExportado, OrcamentoExportado};

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
