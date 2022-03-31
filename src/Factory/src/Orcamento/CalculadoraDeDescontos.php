<?php

namespace Factory\Orcamento;

use Factory\Orcamento\Orcamento;
use Factory\Descontos\{DescontoQuantidadeDeItens, DescontoValorTotal, SemDesconto};
use Factory\AcoesAoGerarPedido\LogDescontos;

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
