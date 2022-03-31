<?php

namespace Flyweight\Orcamento;

use Flyweight\Orcamento\Orcamento;
use Flyweight\Descontos\{DescontoQuantidadeDeItens, DescontoValorTotal, SemDesconto};
use Flyweight\AcoesAoGerarPedido\LogDescontos;

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
