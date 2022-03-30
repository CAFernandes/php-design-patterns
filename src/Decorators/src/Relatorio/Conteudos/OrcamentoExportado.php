<?php

namespace Decorators\Relatorio\Conteudos;

use Decorators\Orcamento;

class OrcamentoExportado implements ConteudoExportado
{
  private static Orcamento $orcamento;
  public function __construct(Orcamento $orcamento)
  {
    self::$orcamento = $orcamento;
  }
  public function conteudo(): array
  {
    return [
      'valor' => self::$orcamento->getValor(),
      'impostos' => self::$orcamento->getImpostos(),
      'quantidade_itens' => self::$orcamento->getQuantidadeItens()
    ];
  }
}
