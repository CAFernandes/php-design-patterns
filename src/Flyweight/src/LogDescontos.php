<?php

namespace Flyweight\AcoesAoGerarPedido;

class LogDescontos
{
  public function executar(float $valor): void
  {
    echo "Registrando log do orcamento com o Valor: $valor";
  }
}
