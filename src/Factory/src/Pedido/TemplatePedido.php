<?php

namespace Factory\Pedido;

class TemplatePedido
{
  private string $nomeCliente;
  private string $cnpj;
  private string $razaoSocial;
  private \DateTimeInterface $dataFinalizacao;

  public function __construct(string $nomeCliente, \DateTimeInterface $dataFinalizacao)
  {
    $this->nomeCliente = $nomeCliente;
    $this->cnpj = '123456789';
    $this->razaoSocial = 'Empresa Teste';
    $this->dataFinalizacao = $dataFinalizacao;
  }

  public function nomeCliente(): string
  {
    return $this->nomeCliente;
  }
  public function dataFinalizacao(): \DateTimeInterface
  {
    return $this->dataFinalizacao;
  }
  public function cnpj(): string
  {
    return $this->cnpj;
  }
  public function razaoSocial(): string
  {
    return $this->razaoSocial;
  }
}
