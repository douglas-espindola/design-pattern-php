<?php

namespace DesignPatterns\Comportamentais\ChainOfResponsibility;

class CalculadoraDePontos
{
    public function calcularPontosDoPedido(Pedido $pedido, int $dia): int
    {
        $pontos = (new Pontos)->calcularPontos($pedido->getValor());

        if ($dia >= 16 && $dia <= 31) {
            return $pontos * 2;
        }

        return $pontos;
    }
}
