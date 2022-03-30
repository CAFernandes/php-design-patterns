<?php

namespace Decorators\AcoesAoGerarPedido;

use Decorators\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Decorators\Pedido;
use Decorators\Relatorio\Conteudos\OrcamentoExportado;
use Decorators\Relatorio\Formatos\{Json, Xml};

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
