<?php
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
class CalculadoraDeDescontos
{
  public function calcula(Orcamento $orcamento)
  {
    $cadeiaDeDescontos = new DescontoQuantidadeDeItens(
      new DescontoValorTotal(
        new SemDesconto()
      )
    );
    return $cadeiaDeDescontos->desconta($orcamento);
  }
}
