<?php
require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

use Flyweight\Pedido\{CriadorDePedido, GerarPedidoCommand, GerarPedidoHandler};
use Flyweight\AcoesAoGerarPedido\{EnviarEmail, GravarPedido, LogGerarPedido, AplicaImpostos};
use Flyweight\Orcamento\ListaDeOrcamentos;

$listaOrcamentos = new ListaDeOrcamentos();

$randNome = ['Caio', 'Daniel', 'Elaine', 'Nicolle', 'Ilton'];
$criadorDePedido = new CriadorDePedido();
/**Gerando orcamento 1 */
for ($i = 0; $i < 1000; $i++) {
  $valor = round(rand(100, 2000), 3);
  $quantidadeItens = (int) rand(3, 30);
  $gerarPedidoCommand = new GerarPedidoCommand($valor, $quantidadeItens, $randNome[(int) rand(0, 4)], $criadorDePedido);
  $gerarPedidoHandler = new GerarPedidoHandler();
  $gerarPedidoHandler->adicionaAcao(new AplicaImpostos());
  $gerarPedidoHandler->adicionaAcao(new GravarPedido());
  $gerarPedidoHandler->adicionaAcao(new EnviarEmail());
  $gerarPedidoHandler->adicionaAcao(new LogGerarPedido());
  $gerarPedidoHandler->execute($gerarPedidoCommand);
  $listaOrcamentos->addOrcamento($gerarPedidoCommand->orcamento());
}
foreach ($listaOrcamentos->orcamentosFinalizados() as $key => $orcamento) {
  if ($listaOrcamentos->orcamento($key - 1)) $orcamento->adicionaItem($listaOrcamentos->orcamento($key - 1));

  $chave = $key + 1;
}
echo '</pre>';


echo PHP_EOL, PHP_EOL, memory_get_peak_usage(), PHP_EOL;
