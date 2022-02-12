<?php

namespace Decorators\AcoesAoGerarPedido;

use Decorators\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Decorators\Http\CurlHttpAdapter;
use Decorators\Pedido;

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
