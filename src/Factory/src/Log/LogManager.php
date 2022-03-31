<?php

namespace Factory\Log;

use Factory\Log\Writers\LoggerWriter;

abstract class LogManager
{
  public function log(string $severidade, string $mensagem): void
  {
    $loggerWriter = $this->criarLogWriter();
    $mensagemFormatada = sprintf('[%s][%s]: %s', date('d/m/y'), $severidade, $mensagem);
    $loggerWriter->writer($mensagemFormatada);
  }

  abstract public function criarLogWriter(): LoggerWriter;
}
