<?php

namespace Decorators\Http;

use Decorators\Http\HttpAdapter;

class CurlHttpAdapter implements HttpAdapter
{
  public function post(string $url, array $data = []): string|bool
  {

    // $ch = curl_init();

    // curl_setopt($ch, CURLOPT_URL, "http://www.example.com/tester.phtml");
    // curl_setopt($ch, CURLOPT_POST, 1);
    // curl_setopt(
    //   $ch,
    //   CURLOPT_POSTFIELDS,
    //   "postvar1=value1&postvar2=value2&postvar3=value3"
    // );
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // $server_output = curl_exec($ch);

    // curl_close($ch);
    $server_output = 'Envio com Sucesso. ' . json_encode($data);

    return $server_output;
  }
}
