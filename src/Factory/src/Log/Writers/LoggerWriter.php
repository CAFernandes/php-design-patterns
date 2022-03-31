<?php

namespace Factory\Log\Writers;

interface LoggerWriter
{
  public function writer(string $mensagemFormatada): void;
}
