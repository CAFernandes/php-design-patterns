<?php

namespace Decorators\Relatorio\Formatos;

use Decorators\Relatorio\Conteudos\ConteudoExportado;

interface ArquivoExportado
{
  public function salvar(ConteudoExportado $conteudoExportado): string;
}
