<?php

namespace DesignPattern\Log\Writers;

class StdOutLogWriter implements LoggerWriter
{
  public function writer(string $mensagemFormatada): void
  {
    echo $mensagemFormatada;
  }
}
