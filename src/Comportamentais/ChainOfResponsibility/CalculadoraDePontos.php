<?php

namespace DesignPatterns\Comportamentais\ChainOfResponsibility;

class CalculadoraDePontos
{
    public function calcularPontosDoPedido(Pedido $pedido, int $dia): int
    {
        if ($pedido->getValor() >= 70) {
            $pontos = intdiv($pedido->getValor(),  5);
        } elseif ($pedido->getValor() >= 40) {
            $pontos = intdiv($pedido->getValor(),  7);
        } elseif ($pedido->getValor() >= 20) {
            $pontos = intdiv($pedido->getValor(),  10);
        } else {
            return 0;
        }

        if ($dia >= 16 && $dia <= 31) {
            return $pontos * 2;
        }

        return $pontos;
    }
}
