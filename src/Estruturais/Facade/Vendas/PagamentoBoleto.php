<?php

namespace DesignPatterns\Estruturais\Facade\Vendas;

class PagamentoBoleto extends Pagamento
{
    public function realizarPagamento(): bool
    {
        if ($this->pedido->getValor() > 0) {
            return true;
        }
        return false;
    }
}
