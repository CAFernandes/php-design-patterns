<?php

namespace Proxy\AcoesAoGerarPedido;

use Proxy\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Proxy\Pedido;
use Proxy\Relatorio\Conteudos\OrcamentoExportado;
use Proxy\Relatorio\Formatos\{Json, Xml};

class GravarPedido implements AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void
  {
    $exportado = new OrcamentoExportado($pedido->orcamento);
    echo json_encode($exportado->conteudo());
    // $exportador = new Json('orcamento');
    // echo 'Arquivo exportado:', $exportador->salvar($exportado), PHP_EOL, '<br/>';
    echo "Pedido gravado...", PHP_EOL;
  }
}
