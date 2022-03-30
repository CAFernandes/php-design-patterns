<?php

namespace Decorators\AcoesAoGerarPedido;

use Decorators\Impostos\{ICMS, ICPP, IKCV, ISS};
use Decorators\Pedido;

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
    $pedido->informaImposto($impostos->realizaCalculoEspecifico($pedido->orcamento));
  }
}
