<?php
require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

use State\{Orcamento, Item};

$orcamento = new Orcamento(array(
  new Item("LAPIS", 125),
  new Item("CANETA", 150),
  new Item("LAPIS", 125),
  new Item("CANETA", 150),
  new Item("LAPIS", 125),
  new Item("CANETA", 150),
));

echo "<strong> Valor Orçamento:</strong>", PHP_EOL, $orcamento->getValor();
