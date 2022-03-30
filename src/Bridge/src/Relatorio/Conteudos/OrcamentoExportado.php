<?php

namespace Bridge\Relatorio\Conteudos;

use Bridge\Orcamento;

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
      'quantidade_itens' => self::$orcamento->getQuantidadeItens()
    ];
  }
}
