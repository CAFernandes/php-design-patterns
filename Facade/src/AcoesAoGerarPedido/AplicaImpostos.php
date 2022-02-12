<?php

namespace Facade\AcoesAoGerarPedido;

use Facade\Impostos\{ICMS, ICPP, IKCV, ISS};
use Facade\Pedido;

class AplicaImpostos implements AcaoAposGerarPedido
{
  public function executar(Pedido $pedido): void
  {
    $impostos = new ISS(
      new ICMS(
        new ICPP(
          new IKCV()
        )
      )
    );
    $pedido->informaImposto(
      round($impostos->realizaCalculoEspecifico($pedido->orcamento), 3)
    );
  }
}
