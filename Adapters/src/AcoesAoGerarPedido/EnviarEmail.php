<?php

namespace Adapters\AcoesAoGerarPedido;

use Adapters\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Adapters\Http\CurlHttpAdapter;
use Adapters\Pedido;

class EnviarEmail implements AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void
  {
    $send = new CurlHttpAdapter();

    echo $send->post('https://my.app/sendMail', [
      'pedido' => $pedido->protocolo,
      'cliente' => $pedido->nomeCliente,
      'data_finalizacao' => $pedido->dataFinalizacao,
      'orcamento' => [
        'valor' => $pedido->orcamentoValor(),
        'quantidade_itens' => $pedido->orcamentoQuantidadeDeItens()
      ]
    ]);
  }
}
