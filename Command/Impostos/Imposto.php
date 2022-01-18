<?

require_once dirname(__DIR__, 1).'/Orcamento.php';

interface Imposto
{
  public function calcula(Orcamento $orcamento);
}
