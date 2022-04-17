<?php

namespace DesignPattern\AcoesAoGerarPedido;

use DesignPattern\AcoesAoGerarPedido\AcaoAposGerarPedido;
use DesignPattern\Pedido\Pedido;
use DesignPattern\Relatorio\Conteudos\OrcamentoExportado;
// use DesignPattern\Relatorio\Formatos\{Json, Xml};

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
