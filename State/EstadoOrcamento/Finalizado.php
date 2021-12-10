<?php

class Finalizado implements EstadoDeUmOrcamento
{
  public function __construct()
  {
    $this->estadoAtual = 'Finalizado';
  }
  public function aplicaDescontoExtra(): DomainException
  {
    throw new \DomainException("Or�amento j� est� finalizado, n�o pode receber desconto");
  }
}
