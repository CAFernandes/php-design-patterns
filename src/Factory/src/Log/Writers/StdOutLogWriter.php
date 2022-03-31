<?php

namespace Factory\Log\Writers;

class StdOutLogWriter implements LoggerWriter
{
  public function writer(string $mensagemFormatada): void
  {
    echo $mensagemFormatada;
  }
}
