<?php

namespace DesignPattern\AcoesAoGerarPedido;

use DesignPattern\Impostos\{ICMS, ICPP, IKCV, ISS};
use DesignPattern\Pedido\Pedido;

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
