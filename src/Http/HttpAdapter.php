<?php

namespace DesignPattern\Http;

interface HttpAdapter
{
  public function post(string $url, array $data = []): string|bool;
}
