<?php

namespace DesignPatterns\Comportamentais\TemplateMethod;

class PagamentoDinheiro
{
    private float $valor;
    private Gateway $gateway;

    public function __construct($valor, Gateway $gateway)
    {
        $this->valor = $valor;
        $this->gateway = $gateway;
    }

    //Calcula a taxa do Gateway.
    public function calcularTaxa(): float
    {
        //Pagamento em dinheiro não possui taxa.
        return 0;
    }

    //Calcula o desconto.
    public function calcularDesconto(): float
    {
        //Retorna o valor do pagamento com desconto de 10%.
        return $this->valor * 0.1;
    }

    public function realizaCobranca(): bool
    {
        $valorFinal = $this->valor + $this->calcularTaxa() - $this->calcularDesconto();
        return $this->gateway->cobrar($valorFinal);
    }
}