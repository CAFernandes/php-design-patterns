<?php
require_once __DIR__ . '/vendor/autoload.php';

// use Strategy\{Orcamento, CalculadoraDeImpostos};
// use Strategy\Impostos\{ISS, ICMS};

$calculadora = new Strategy\CalculadoraDeImpostos();
echo $calculadora->calcula(new Strategy\Orcamento(500), new Strategy\Impostos\ICMS()), '</br>';
echo $calculadora->calcula(new Strategy\Orcamento(500), new Strategy\Impostos\ISS());
