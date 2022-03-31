<?php

namespace Flyweight\Orcamento;

use Flyweight\Orcamento\EstadoOrcamento\Finalizado;
use Flyweight\Http\HttpAdapter;
use DomainException;

class RegistroOrcamento
{
  private static HttpAdapter $http;
  public function __construct(HttpAdapter $http)
  {
    self::$http = $http;
  }
  /**
   * @throws DomainException
   */
  public function registrar(Orcamento $orcamento): void
  {
    if (!$orcamento->estadoAtual instanceof Finalizado) throw new DomainException('Apenas orçamentos finalizados podem ser registrados na API');
    self::$http->post('http://api.registrar.com/orcamneto', [
      'valor'  => $orcamento->valor(),
      'quantidaDeItens' => $orcamento->getQuantidadeItens()
    ]);
  }
}
