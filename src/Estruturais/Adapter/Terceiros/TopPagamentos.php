<?php

namespace DesignPatterns\Estruturais\Adapter\Terceiros;

use DesignPatterns\Estruturais\Adapter\Gateway;

class TopPagamentos
{
    private float $valor;
    private int $parcelas;
    private string $numeroCartao;
    private string $cvv;

    public function setValorTotal(float $valor): void
    {
        $this->valor = $valor;
    }

    public function setQuantidadeParcelas(int $parcelas): void
    {
        $this->parcelas = $parcelas;
    }

    public function setCartao(string $numeroCartao, string $cvv): void
    {
        $this->numeroCartao = $numeroCartao;
        $this->cvv = $cvv;
    }

    public function realizarPagamento(): bool
    {
        echo 'Pagamento realizado via TopPagamentos';
        return true;
    }
}
