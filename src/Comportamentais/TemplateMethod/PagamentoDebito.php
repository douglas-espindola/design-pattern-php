<?php

namespace DesignPatterns\Comportamentais\TemplateMethod;

class PagamentoDebito extends Pagamento
{
    //Calcula a taxa do Gateway.
    public function calcularTaxa(): float
    {
        //Retorna uma taxa de 4 reais.
        return 4;
    }
    public function calcularDesconto(): float
    {
        return $this->getValor() * 0.05;
    }
}