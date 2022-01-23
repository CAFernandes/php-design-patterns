<?php
require_once __DIR__ . '/vendor/autoload.php';

use ChainsOfResponsibility\{Orcamento, CalculadoraDeDescontos, Item};

$calculadora = new CalculadoraDeDescontos();
$orcamento = new Orcamento(array(
  new Item("LAPIS", 125),
  new Item("CANETA", 150),
  new Item("LAPIS", 125),
  new Item("CANETA", 150),
  new Item("LAPIS", 125),
  new Item("CANETA", 150),
));
$valor = $orcamento->getValor();
echo "<li><strong>Custo:</strong>\t", $orcamento->getValor(), "</li></br></br>";
echo "<li><strong>Desconto:</strong>\t", $calculadora->calcula($orcamento), '</li></br></br>';
