<?php

namespace Command;

use Command\Orcamento;

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

  public function __toString()
  {
    $string = "<strong>Nome Cliente:</strong> {$this->nomeCliente} </br>";
    $string .= "<strong>No valor de:</strong> R$ {$this->orcamento->getValor()}</br>";
    $string .= "<strong>Itens no Orçamento: </strong>{$this->orcamento->getQuantidadeItens()}</br>";
    $string .= "<strong>Situação:</strong> {$this->orcamento->estado()}";
    return $string;
  }
}
