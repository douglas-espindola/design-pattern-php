<?php

namespace DesignPatterns\Comportamentais\ChainOfResponsibility;

class Pedido
{
    private float $valor;

    public function getValor(): float
    {
        return $this->valor;
    }

    public function setValor(float $valor): void
    {
        $this->valor = $valor;
    }
}
