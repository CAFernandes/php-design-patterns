<?php

namespace Composite\AcoesAoGerarPedido;

use Composite\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Composite\Pedido;
use Composite\Relatorio\Conteudos\OrcamentoExportado;
use Composite\Relatorio\Formatos\{Json, Xml};

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
