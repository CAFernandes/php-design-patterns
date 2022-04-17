<?php

namespace DesignPattern\NotaFiscal;

use DateTimeImmutable;

class ConstrutorNotaFiscal
{
  protected NotaFiscal $notaFiscal;
  public function __construct()
  {
    $this->notaFiscal = new NotaFiscal();
    $this->notaFiscal->dataDeEmissao = new \DateTimeImmutable();
  }
  public function valor(float $valor): ConstrutorNotaFiscal
  {
    $this->notaFiscal->valorBruto = $valor;
    return $this;
  }
  public function impostos(float $impostos): ConstrutorNotaFiscal
  {
    $this->notaFiscal->valorImpostos = $impostos;
    return $this;
  }
  public function paraEmpresa(string $cnpj, string $razaoSocial): ConstrutorNotaFiscal
  {
    $this->notaFiscal->cnpj = $cnpj;
    $this->notaFiscal->razaoSocial = $razaoSocial;
    return $this;
  }

  public function comItem(array $item): ConstrutorNotaFiscal
  {
    $this->notaFiscal->itens = $item;
    return $this;
  }

  public function comObservacoes(string $observacoes): ConstrutorNotaFiscal
  {
    $this->notaFiscal->observacoes = $observacoes;
    return $this;
  }

  public function dataEmissao(string $dataEmissao)
  {
    $this->notaFiscal->dataDeEmissao = new DateTimeImmutable($dataEmissao);
    return $this;
  }

  public function build(): NotaFiscal
  {
    return $this->notaFiscal;
  }
}
