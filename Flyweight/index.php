<?php
require_once __DIR__ . '/vendor/autoload.php';

use Flyweight\{DadosExtrinsecosPedido, GerarPedidoCommand, GerarPedidoHandler, ListaDeOrcamentos};
use Flyweight\AcoesAoGerarPedido\{EnviarEmail, GravarPedido, LogGerarPedido, AplicaImpostos};

$listaOrcamentos = new ListaDeOrcamentos();

$dados = new DadosExtrinsecosPedido(md5((string)rand(1, 100000)), new \DateTimeImmutable());


/**Gerando orcamento 1 */
for ($i = 0; $i < 1000; $i++) {
  $valor = round(rand(100, 2000), 3);
  $quantidadeItens = (int) rand(3, 30);
  $gerarPedidoCommand = new GerarPedidoCommand($valor, $quantidadeItens, $dados);
  $gerarPedidoHandler = new GerarPedidoHandler();
  $gerarPedidoHandler->adicionaAcao(new AplicaImpostos());
  $gerarPedidoHandler->adicionaAcao(new GravarPedido());
  $gerarPedidoHandler->adicionaAcao(new EnviarEmail());
  $gerarPedidoHandler->adicionaAcao(new LogGerarPedido());
  $gerarPedidoHandler->execute($gerarPedidoCommand);
  $listaOrcamentos->addOrcamento($gerarPedidoHandler->orcamento());
}
foreach ($listaOrcamentos->orcamentosFinalizados() as $key => $orcamento) {
  //adiconar o curl aqui
  if ($listaOrcamentos->orcamento($key - 1)) $orcamento->adicionaItem($listaOrcamentos->orcamento($key - 1));

  $chave = $key + 1;
  // echo "<strong>Orcamento - {$chave}<strong/><br/>";
  // echo "<strong>No valor de: R$<strong/>{$orcamento->valor()}</br>";
  // echo "<strong>Itens no Orçamento: <strong/>{$orcamento->getQuantidadeItens()}</br>";
  // echo "<strong>Preço médio: <strong/>{$media}</br><strong>Situação:</strong> {$orcamento->estado()}";
}
echo '</pre>';


echo PHP_EOL, PHP_EOL, memory_get_peak_usage(), PHP_EOL;
