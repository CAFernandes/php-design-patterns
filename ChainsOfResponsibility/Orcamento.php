<?

class Orcamento {
  private $itens = array();

  public function __construct($itens) {
    $this->itens = $itens;
  }

  public function getValor() {
    $valor = 0;
    foreach ($this->itens as $item) {
      $valor += $item->getPrice();
    }
    return $valor;
  }
  public function getQuantidadeItens() {
    return count($this->itens);
  }
}
