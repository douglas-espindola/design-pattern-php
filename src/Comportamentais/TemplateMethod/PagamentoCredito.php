<?php

namespace DesignPatterns\Comportamentais\TemplateMethod;

class PagamentoCredito
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
        //Retorna uma taxa de 5% o valor do pagamento.
        return $this->valor * 0.05;
    }

    //Calcula o desconto.
    public function calcularDesconto(): float
    {
        //Se o valor pago for maior que 300 reais.
        if ($this->valor > 300) {
            //Retorna um desconto de 2% sob o valor do pagamento.
            return $this->valor * 0.02;
        }
        //Pagamentos de valores menores que 300 reais não possuem desconto.
        return 0;
    }

    //Realiza a cobrança.
    public function realizaCobranca(): bool
    {
        //Calcula o valor total (Valor do pagamento + taxa - desconto).
        $valorFinal = $this->valor + $this->calcularTaxa() - $this->calcularDesconto();

        //Delega a cobrança para o Gateway.
        return $this->gateway->cobrar($valorFinal);
    }
}