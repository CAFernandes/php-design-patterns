<?php

namespace Observer\EstadoOrcamento;

use Observer\Orcamento;

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
    throw new \DomainException("Orçamento em estado inválido para aprovação");
  }
  public function reprova(Orcamento $orcamento): void
  {
    throw new \DomainException("Orçamento em estado inválido para reprovação");
  }
  public function finaliza(Orcamento $orcamento): void
  {
    throw new \DomainException("Orçamento em estado inválido para finalização");
  }
}
