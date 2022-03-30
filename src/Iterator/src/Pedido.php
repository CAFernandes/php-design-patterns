<?php

namespace Iterator;

use Iterator\Orcamento;

class Pedido
{
  public string $nomeCliente;
  public \DateTimeInterface $dataFinalizacao;
  public Orcamento $orcamento;

  public function __construct(string $nomeCliente, Orcamento $orcamento)
  {
    $this->nomeCliente = $nomeCliente;
    $this->orcamento = $orcamento;
    $this->dataFinalizacao = new \DateTimeImmutable();
  }
}
