<?php

    namespace DesignPatterns\Comportamentais\Strategy;

    class FreteComum implements Frete
    {
        public function calcula(float $valorPedido): float
        {
            return $valorPedido * 0.05;
        }
    }