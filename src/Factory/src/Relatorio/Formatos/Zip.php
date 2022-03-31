<?php

namespace Factory\Relatorio\Formatos;

use Factory\Relatorio\Conteudos\ConteudoExportado;

class Zip implements ArquivoExportado
{
  private string $nomeArquivo;
  public function __construct($nomeArquivo)
  {
    $this->nomeArquivo = $nomeArquivo;
  }
  public function salvar(ConteudoExportado $conteudoExportado): string
  {
    $caminhoArquivo = tempnam(sys_get_temp_dir(), 'zip');
    $zip = new \ZipArchive();
    $zip->open($caminhoArquivo, \ZipArchive::CREATE);
    $zip->addFromString($this->nomeArquivo, serialize($conteudoExportado->conteudo()));
    $zip->close();
    return $caminhoArquivo;
  }
}
