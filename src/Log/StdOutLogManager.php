<?php

namespace DesignPattern\Log;

use DesignPattern\Log\Writers\{LoggerWriter, StdOutLogWriter};

class StdOutLogManager extends LogManager
{
  public function criarLogWriter(): LoggerWriter
  {
    return new StdOutLogWriter();
  }
}
