<?php

namespace ChainsOfResponsibility;

use ChainsOfResponsibility\{Orcamento};
use ChainsOfResponsibility\Descontos\{DescontoQuantidadeDeItens, DescontoValorTotal, SemDesconto};
use Facade\AcoesAoGerarPedido\LogDescontos;

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
