<?php

namespace DesignPatterns\Estruturais\Facade\Vendas;

abstract class Pagamento
{
    protected Pedido $pedido;

    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    abstract public function realizarPagamento(): bool;
}
