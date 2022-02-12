<?php

namespace Facade\AcoesAoGerarPedido;

use Facade\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Facade\Pedido;
use Facade\Relatorio\Conteudos\OrcamentoExportado;
use Facade\Relatorio\Formatos\{Json, Xml};

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
