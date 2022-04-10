<?php

namespace Factory\NotaFiscal;


class NotaFiscal
{
  public string $nro;
  public string $razaoSocial;
  public string $cnpj;
  public \DateTimeInterface $dataDeEmissao;
  public string $observacoes;
  public array $itens;
  public float $valorBruto;
  public float $valorImpostos;

  public function __construct()
  {
    $this->nro = rand(200000000, 600000000);
  }

  public function valor(): float
  {
    return $this->valorBruto + $this->valorImpostos;
  }

  public function emitir(): void
  {
    echo "Emitindo a nota fiscal Nro: {$this->nro}, para a empresa {$this->razaoSocial}, no valor de {$this->valor()}. Valor Bruto: {$this->valorBruto}, Valor Impostos: {$this->valorImpostos}";
  }
}
