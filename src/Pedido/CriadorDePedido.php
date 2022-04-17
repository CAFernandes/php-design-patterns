<?php

namespace DesignPattern\Pedido;

use DesignPattern\Orcamento\Orcamento;

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
    $hash = md5("$nomeCliente$dataFormatada");
    if (!array_keys($this->templates, $hash)) {
      $this->templates[$hash] = new TemplatePedido($nomeCliente, new \DateTimeImmutable($dataFormatada));
    }
    return $this->templates[$hash];
  }
}
