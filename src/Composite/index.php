<?php
require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

use Composite\{GerarPedidoCommand, GerarPedidoHandler, ListaDeOrcamentos};
use Composite\AcoesAoGerarPedido\{EnviarEmail, GravarPedido, LogGerarPedido, AplicaImpostos};

$listaOrcamentos = new ListaDeOrcamentos();

/**Gerando orcamento 1 */
for ($i = 0; $i < rand(1, 5); $i++) {
  $valor = round(rand(100, 2000), 3);
  $quantidadeItens = (int) rand(3, 30);
  $nomeCliente = 'Caio Fernandes';
  $gerarPedidoCommand = new GerarPedidoCommand($valor, $quantidadeItens, $nomeCliente);
  $gerarPedidoHandler = new GerarPedidoHandler();
  $gerarPedidoHandler->adicionaAcao(new AplicaImpostos());
  $gerarPedidoHandler->adicionaAcao(new GravarPedido());
  $gerarPedidoHandler->adicionaAcao(new EnviarEmail());
  $gerarPedidoHandler->adicionaAcao(new LogGerarPedido());
  $gerarPedidoHandler->execute($gerarPedidoCommand);
  $listaOrcamentos->addOrcamento($gerarPedidoHandler->orcamento());
}
echo 'Recebendo chamada', '<pre>';
foreach ($listaOrcamentos->orcamentosFinalizados() as $key => $orcamento) {
  //adiconar o curl aqui
  if ($listaOrcamentos->orcamento($key - 1)) $orcamento->adicionaItem($listaOrcamentos->orcamento($key - 1));

  $chave = $key + 1;
  $media = $orcamento->valor() / $orcamento->getQuantidadeItens();
  echo "<strong>Orcamento - {$chave}<strong/><br/>";
  echo "<strong>No valor de: R$<strong/>{$orcamento->valor()}</br>";
  echo "<strong>Itens no Orçamento: <strong/>{$orcamento->getQuantidadeItens()}</br>";
  echo "<strong>Preço médio: <strong/>{$media}</br><strong>Situação:</strong> {$orcamento->estado()}";
}
echo '</pre>';
