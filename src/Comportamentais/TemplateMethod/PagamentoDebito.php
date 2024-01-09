<?php

namespace DesignPatterns\Comportamentais\TemplateMethod;

class PagamentoDebito
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
        //Retorna uma taxa de 4 reais.
        return 4;
    }

    //Calcula o desconto.
    public function calcularDesconto(): float
    {
        //Retorna o valor do pagamento com desconto de 5%.
        return $this->valor * 0.05;
    }

    public function realizaCobranca(): bool
    {
        $valorFinal = $this->valor + $this->calcularTaxa() - $this->calcularDesconto();
        return $this->gateway->cobrar($valorFinal);
    }
}