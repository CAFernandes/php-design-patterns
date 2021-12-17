<?php
namespace Alura\DesignPattern\Observer\AcoesAoGerarPedido;

use Alura\DesignPattern\Observer\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Alura\DesignPattern\Observer\Pedido;

class EnviarEmail implements AcaoAposGerarPedido
{
    public function executar(Pedido $pedido):void
    {
        echo "Enviando o pedido por e-mail...\n";
    }
}
