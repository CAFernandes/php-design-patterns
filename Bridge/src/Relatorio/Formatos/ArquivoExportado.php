<?php

namespace Bridge\Relatorio\Formatos;

use Bridge\Relatorio\Conteudos\ConteudoExportado;

interface ArquivoExportado
{
  public function salvar(ConteudoExportado $conteudoExportado): string;
}
