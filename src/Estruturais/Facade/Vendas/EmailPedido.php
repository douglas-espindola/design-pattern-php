<?php

namespace DesignPatterns\Estruturais\Facade\Vendas;

class EmailPedido
{
    private Pedido $pedido;

    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    public function enviarEmail(string $mensagem){
        echo 'Email enviado para ' . $this->pedido->getConsumidor()->getEmail() . '<br>';
        echo 'Mensagem: ' . $mensagem;
    }
}
