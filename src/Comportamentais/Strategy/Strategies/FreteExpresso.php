<?php

    namespace DesignPatterns\Comportamentais\Strategy;

    class FreteExpresso implements Frete
    {
        public function calcula(float $valorPedido): float
        {
            return $valorPedido * 0.1;
        }
    }