<?php

namespace DesignPatterns\Estruturais\Adapter;

use DesignPatterns\Estruturais\Adapter\Terceiros\PagFacil;

class Cobranca
{
    private PagFacil $gateway;

    public function __construct(PagFacil $gateway)
    {
        $this->gateway = $gateway;
    }

    public function setGateway(PagFacil $gateway): void
    {
        $this->gateway = $gateway;
    }

    public function setValor(float $valor): void
    {
        $this->gateway->setValor($valor);
    }

    public function setParcelas(int $parcelas): void
    {
        $this->gateway->setParcelas($parcelas);
    }

    public function setNumeroCartao(string $numeroCartao): void
    {
        $this->gateway->setNumeroCartao($numeroCartao);
    }

    public function setCVV(string $cvv): void
    {
        $this->gateway->setCVV($cvv);
    }

    public function realizarPagamento(): bool
    {
        //Verifica se cartao é válido
        if ($this->gateway->validarCartao()) {
            //retorna se o pagamento foi realizado com sucesso
            return $this->gateway->realizarPagamento();
        }

        return false;
    }
}
