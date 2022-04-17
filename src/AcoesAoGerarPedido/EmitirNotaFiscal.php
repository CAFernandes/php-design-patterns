<?php

namespace DesignPattern\AcoesAoGerarPedido;

use DesignPattern\AcoesAoGerarPedido\AcaoAposGerarPedido;
use DesignPattern\NotaFiscal\{NotaFiscal, ConstrutorNotaFiscal};
use DesignPattern\Pedido\Pedido;

class EmitirNotaFiscal implements AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void
  {
    $builder = new ConstrutorNotaFiscal();
    $notaFiscal = $builder
      ->paraEmpresa($pedido->cnpj(), $pedido->razaoSocial())
      ->valor($pedido->orcamentoValor())
      ->impostos($pedido->orcamentoImpostos())
      ->comItem($pedido->orcamentoListaItens())
      ->comObservacoes('Emitido automaticamente')
      ->dataEmissao($pedido->dataFinalizacao('Y-m-d H:i:s'))
      ->build();
    $notaFiscal->emitir();
    // echo "Emitindo nota fiscal para o pedido {$pedido->getNumero()}";
  }
}
