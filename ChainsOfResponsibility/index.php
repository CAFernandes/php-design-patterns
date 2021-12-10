<?
spl_autoload_register(function ($class) {
  $dirs = array(
    __DIR__,
    __DIR__ . '/Descontos/'
  );
  foreach ($dirs as $dir) {
    if (file_exists("{$dir}/{$class}.php")) {
      include_once("{$dir}/{$class}.php");
    }
  }
});

$calculadora = new CalculadoraDeDescontos();
$orcamento = new Orcamento(array(
  new Item("LAPIS", 125),
  new Item("CANETA", 150),
  new Item("LAPIS", 125),
  new Item("CANETA", 150),
  new Item("LAPIS", 125),
  new Item("CANETA", 150),
));
echo "<li><strong>Custo:</strong>\t", $orcamento->getValor(), '</li></br></br>';
echo "<li><strong>Desconto:</strong>\t", $calculadora->calcula($orcamento), '</li></br></br>';
