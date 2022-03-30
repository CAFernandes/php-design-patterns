<?php

namespace Composite\Relatorio\Formatos;

use Composite\Relatorio\Conteudos\ConteudoExportado;

class Json implements ArquivoExportado
{
  public function __construct()
  {
  }
  public function salvar(ConteudoExportado $elementoOrcamento): string
  {
    $caminhoArquivo = tempnam(sys_get_temp_dir(), 'json');
    $elmentoJson = json_encode($elementoOrcamento->conteudo());
    $file = fopen($caminhoArquivo, 'w');
    fwrite($file, $elmentoJson);
    fclose($file);
    return $caminhoArquivo;
  }
}
