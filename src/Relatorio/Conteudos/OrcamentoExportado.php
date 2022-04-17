<?php

namespace DesignPattern\Relatorio\Conteudos;

use DesignPattern\Orcamento\Orcamento;

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
      'valor' => self::$orcamento->valor(),
      'impostos' => self::$orcamento->getImpostos(),
      'quantidade_itens' => self::$orcamento->getQuantidadeItens()
    ];
  }
}
