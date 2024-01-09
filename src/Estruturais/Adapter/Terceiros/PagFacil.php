<?php

namespace DesignPatterns\Estruturais\Adapter\Terceiros;

use DesignPatterns\Estruturais\Adapter\Gateway;

class PagFacil
{
    private float $valor;
    private int $parcelas;
    private string $numeroCartao;
    private string $cvv;

    public function setValor(float $valor): void
    {
        $this->valor = $valor;
    }

    public function setParcelas(int $parcelas): void
    {
        $this->parcelas = $parcelas;
    }

    public function setNumeroCartao(string $numeroCartao): void
    {
        $this->numeroCartao = $numeroCartao;
    }

    public function setCVV(string $cvv): void
    {
        $this->cvv = $cvv;
    }

    public function validarCartao(): bool
    {
        if (
            $this->numeroCartao != "" &&
            $this->cvv != "" &&
            strlen($this->cvv ) == 3
        ) {
            return true;
        }

        return false;
    }

    public function realizarPagamento(): bool
    {
        echo 'Pagamento realizado via PagFacil';
        return true;
    }
}
