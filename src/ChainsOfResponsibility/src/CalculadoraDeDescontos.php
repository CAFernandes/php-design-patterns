<?php

namespace ChainsOfResponsibility;

use ChainsOfResponsibility\{Orcamento};
use ChainsOfResponsibility\Descontos\{DescontoQuantidadeDeItens, DescontoValorTotal, SemDesconto};

class CalculadoraDeDescontos
{
  public function calcula(Orcamento $orcamento)
  {
    $cadeiaDeDescontos = new DescontoQuantidadeDeItens(
      new DescontoValorTotal(
        new SemDesconto()
      )
    );
    return $cadeiaDeDescontos->desconta($orcamento);
  }
}
