<?php

    namespace DesignPatterns\Comportamentais\Strategy\Strategies;

    class FreteComum implements Frete
    {
        public function calcula(float $ValorPedido): float
        {
            return $ValorPedido * 0.05;
        }
    }