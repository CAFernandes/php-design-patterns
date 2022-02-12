<?php

namespace Flyweight\Relatorio\Formatos;

use Flyweight\Relatorio\Conteudos\ConteudoExportado;

class Xml implements ArquivoExportado
{
  private string $nomeElementoPai;
  public function __construct(string $nomeElementoPai)
  {
    $this->nomeElementoPai = $nomeElementoPai;
  }
  public function salvar(ConteudoExportado $conteudoExportado): string
  {
    $elementoOrcamento = new \SimpleXMLElement("<{$this->nomeElementoPai}/>");

    foreach ($conteudoExportado->conteudo() as $item => $valor) {
      $elementoOrcamento->addChild($item, $valor);
    }
    $caminhoArquivo = tempnam(sys_get_temp_dir(), 'xml');
    $elementoOrcamento->asXML($caminhoArquivo);
    return $caminhoArquivo;
  }
}
