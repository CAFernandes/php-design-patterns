<?php

namespace DesignPattern\Orcamento;

use DesignPattern\Orcamento\Orcamento;
use DesignPattern\Descontos\{DescontoQuantidadeDeItens, DescontoValorTotal, SemDesconto};
use DesignPattern\AcoesAoGerarPedido\LogDescontos;

class CalculadoraDeDescontos
{
  public function calcula(Orcamento $orcamento)
  {
    $cadeiaDeDescontos = new DescontoQuantidadeDeItens(
      new DescontoValorTotal(
        new SemDesconto()
      )
    );
    $descontoAplicado = $cadeiaDeDescontos->desconta($orcamento);
    $log = new LogDescontos();
    $log->executar($descontoAplicado);
    return $descontoAplicado;
  }
}
