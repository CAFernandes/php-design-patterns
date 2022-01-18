<?

namespace Alura\DesignPattern\Observer\Impostos;

use Alura\DesignPattern\Observer\Orcamento;

interface Imposto
{
  public function calcula(Orcamento $orcamento);
}
