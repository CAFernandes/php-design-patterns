<?php

namespace Factory\AcoesAoGerarPedido;

use Factory\Impostos\{ICMS, ICPP, IKCV, ISS};
use Factory\Pedido\Pedido;

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
    echo 'R$ ', round($impostos->realizaCalculoEspecifico($pedido->orcamento), 3);
  }
}
