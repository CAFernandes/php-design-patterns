<?php
require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

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
echo '<ul>';
echo "<li><strong>Custo:</strong>\t", $orcamento->getValor(), "</li>";
echo "<li><strong>Desconto:</strong>\t", $calculadora->calcula($orcamento), '</li>';
echo '</ul>';
