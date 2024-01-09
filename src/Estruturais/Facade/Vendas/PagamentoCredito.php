<?php

namespace DesignPatterns\Estruturais\Facade\Vendas;

class PagamentoCredito extends Pagamento
{
    public function realizarPagamento(): bool
    {
        if ($this->pedido->getValor() > 0) {
            return true;
        }
        return false;
    }
}
