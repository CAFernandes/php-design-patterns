<?php

namespace Composite\Relatorio\Formatos;

use Composite\Relatorio\Conteudos\ConteudoExportado;

interface ArquivoExportado
{
  public function salvar(ConteudoExportado $conteudoExportado): string;
}
