<?php
spl_autoload_register(function ($class) {
  $dirs = array(
    __DIR__,
    __DIR__ . '/Impostos/'
  );
  foreach ($dirs as $dir) {
    if (file_exists("{$dir}/{$class}.php")) {
      include_once("{$dir}/{$class}.php");
    }
  }
});
$orcamento = new Orcamento(array(
  new Item("LAPIS", 125),
  new Item("CANETA", 150),
  new Item("LAPIS", 125),
  new Item("CANETA", 150),
  new Item("LAPIS", 125),
  new Item("CANETA", 150),
));

$calculadora = new CalculadoraDeImpostos();

/**
 * ICMS: 8.25
 * ISS: 49.5
 * ICPP: 24.75
 * IKCV: 33
 */

echo "<li><strong>ICMS:</strong>\t", $calculadora->calcula($orcamento, new ICMS()), '</li></br>';
echo "<li><strong>ISS:</strong>\t", $calculadora->calcula($orcamento, new ISS()), '</li></br>';
echo "<li><strong>ICPP:</strong>\t", $calculadora->calcula($orcamento, new ICPP()), '</li></br>';
echo "<li><strong>IKCV:</strong>\t", $calculadora->calcula($orcamento, new IKCV()), '</li></br>';
