<?php

namespace Factory\Log;

use Factory\Log\Writers\{LoggerWriter, StdOutLogWriter};

class StdOutLogManager extends LogManager
{
  public function criarLogWriter(): LoggerWriter
  {
    return new StdOutLogWriter();
  }
}
