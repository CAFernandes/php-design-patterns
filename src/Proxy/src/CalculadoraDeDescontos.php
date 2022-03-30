<?php

namespace Proxy;

use Proxy\{Orcamento};
use Proxy\Descontos\{DescontoQuantidadeDeItens, DescontoValorTotal, SemDesconto};
use Proxy\AcoesAoGerarPedido\LogDescontos;

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
