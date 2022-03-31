<?php

namespace Factory\AcoesAoGerarPedido;

use Factory\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Factory\Pedido\Pedido;
use Factory\Relatorio\Conteudos\OrcamentoExportado;
// use Factory\Relatorio\Formatos\{Json, Xml};

class GravarPedido implements AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void
  {
    $exportado = new OrcamentoExportado($pedido->orcamento);
    echo json_encode($exportado->conteudo());
    // $exportador = new Json('orcamento');
    // echo 'Arquivo exportado:', $exportador->salvar($exportado), PHP_EOL, '<br/>';
    echo "Pedido gravado...";
  }
}
