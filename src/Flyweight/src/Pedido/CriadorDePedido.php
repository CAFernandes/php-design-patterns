<?php

namespace Flyweight\Pedido;

use Flyweight\Orcamento\Orcamento;

class CriadorDePedido
{
  private array $templates = [];

  public function criarPedido(string $nomeCliente, $dataFormatada, Orcamento $orcamento): Pedido
  {
    $template = $this->gerarTemplatePedido($nomeCliente, $dataFormatada);
    $pedido = new Pedido($template, $orcamento);
    return $pedido;
  }

  private function gerarTemplatePedido(string $nomeCliente, string $dataFormatada): TemplatePedido
  {
    echo $hash = md5("$nomeCliente$dataFormatada"), '<br>';
    if (!array_keys($this->templates, $hash)) {
      $this->templates[$hash] = new TemplatePedido($nomeCliente, new \DateTimeImmutable($dataFormatada));
    }
    return $this->templates[$hash];
  }
}
