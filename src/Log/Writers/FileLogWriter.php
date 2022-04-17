<?php

namespace DesignPattern\Log\Writers;

class FileLogWriter implements LoggerWriter
{
  private $file;
  public function __construct(string $caminhoArquivo)
  {
    $this->file = fopen($caminhoArquivo, 'a+');
  }
  public function writer(string $mensagemFormatada): void
  {
    fwrite($this->file, $mensagemFormatada);
  }
  public function __destruct()
  {
    fclose($this->file);
  }
}
