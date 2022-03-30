<?php
require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

use Strategy\{Orcamento, CalculadoraDeImpostos};
use Strategy\Impostos\{ISS, ICMS};

$calculadora = new CalculadoraDeImpostos();
echo '<ul>';
echo "<li><strong>Imposto ICMS sobre o Orçamento:</strong> R$", $calculadora->calcula(new Orcamento(500), new ICMS()), '</li>';
echo "<li><strong>Imposto ISS sobre o Orçamento:</strong> R$", $calculadora->calcula(new Orcamento(500), new ISS()), '</li>';
echo '</ul>';
