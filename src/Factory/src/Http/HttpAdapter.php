<?php

namespace Factory\Http;

interface HttpAdapter
{
  public function post(string $url, array $data = []): string|bool;
}
