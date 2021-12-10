<?php

class Finalizado implements EstadoDeUmOrcamento
{
  public function __construct()
  {
    $this->estadoAtual = 'Finalizado';
  }
  public function aplicaDescontoExtra(): DomainException
  {
    throw new \DomainException("Orçamento já está finalizado, não pode receber desconto");
  }
}
