<?php

namespace DesignPatterns\Comportamentais\TemplateMethod;

class PagamentoDinheiro extends Pagamento
{
    public function calcularDesconto(): float
    {
        //Retorna o valor do pagamento com desconto de 10%.
        return $this->getValor() * 0.1;
    }
}