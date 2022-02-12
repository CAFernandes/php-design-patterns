<?php

namespace Facade\Relatorio\Formatos;

use Facade\Relatorio\Conteudos\ConteudoExportado;

interface ArquivoExportado
{
  public function salvar(ConteudoExportado $conteudoExportado): string;
}
