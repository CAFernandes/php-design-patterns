<?
spl_autoload_register(function ($class) {
  $dirs = array(
    __DIR__,
    __DIR__.'/impostos/'
  );
  foreach ($dirs as $dir) {
    if (file_exists("{$dir}/{$class}.php")) {
      include_once("{$dir}/{$class}.php");
    }
  }
});

$calculadora = new CalculadoraDeImpostos();
echo $calculadora->calcula(new Orcamento(500), new ICMS()), '</br>';
echo $calculadora->calcula(new Orcamento(500), new ISS());
