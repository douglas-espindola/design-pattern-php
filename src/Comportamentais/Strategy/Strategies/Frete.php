<?php

    namespace DesignPatterns\Comportamentais\Strategy\Strategies;
    interface Frete
    {
        public function calcula(float $ValorPedido): float;
    }