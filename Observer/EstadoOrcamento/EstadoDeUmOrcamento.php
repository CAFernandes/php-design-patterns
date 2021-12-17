<?php

namespace Alura\DesignPattern\Observer\EstadoOrcamento;

use Alura\DesignPattern\Observer\Orcamento;

abstract class EstadoDeUmOrcamento
{
  protected string $estadoAtual;
  public function getEstado(): string
  {
    return $this->estadoAtual;
  }

  /**
   * @throws \DomainException
   */
  abstract public function calculaDescontoExtra(Orcamento $orcamento): float;
  public function aprova(Orcamento $orcamento): void
  {
    throw new \DomainException("Or�amento em estado inv�lido para aprova��o");
  }
  public function reprova(Orcamento $orcamento): void
  {
    throw new \DomainException("Or�amento em estado inv�lido para reprova��o");
  }
  public function finaliza(Orcamento $orcamento): void
  {
    throw new \DomainException("Or�amento em estado inv�lido para finaliza��o");
  }
}
