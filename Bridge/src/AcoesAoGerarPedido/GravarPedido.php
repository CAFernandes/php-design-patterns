<?php

namespace Bridge\AcoesAoGerarPedido;

use Bridge\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Bridge\Pedido;
use Bridge\Relatorio\Conteudos\OrcamentoExportado;
use Bridge\Relatorio\Formatos\{Json, Xml};

class GravarPedido implements AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void
  {
    $exportado = new OrcamentoExportado($pedido->orcamento);
    $exportador = new Json('orcamento');
    echo 'Arquivo exportado:', $exportador->salvar($exportado), PHP_EOL, '<br/>';
    echo "Pedido gravado...", PHP_EOL;
  }
}
