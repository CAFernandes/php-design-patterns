<?php

namespace DesignPattern\Log;

use DesignPattern\Log\Writers\{LoggerWriter, FileLogWriter};

class FileLogManager extends LogManager
{
  private string $file;
  public function __construct(string $file)
  {
    $this->file = $file;
  }
  public function criarLogWriter(): LoggerWriter
  {
    return new FileLogWriter($this->file);
  }
}
