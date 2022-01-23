<?php
require_once __DIR__ . '/vendor/autoload.php';

use State\{Orcamento, Item};


$orcamento = new Orcamento(array(
  new Item("LAPIS", 125),
  new Item("CANETA", 150),
  new Item("LAPIS", 125),
  new Item("CANETA", 150),
  new Item("LAPIS", 125),
  new Item("CANETA", 150),
));

echo $orcamento->getValor();
