<?php

namespace DesignPattern\Log\Writers;

interface LoggerWriter
{
  public function writer(string $mensagemFormatada): void;
}
