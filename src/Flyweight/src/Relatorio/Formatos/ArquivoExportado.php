<?php

namespace Flyweight\Relatorio\Formatos;

use Flyweight\Relatorio\Conteudos\ConteudoExportado;

interface ArquivoExportado
{
  public function salvar(ConteudoExportado $conteudoExportado): string;
}
