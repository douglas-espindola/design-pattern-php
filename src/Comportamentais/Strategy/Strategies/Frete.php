<?php

    namespace DesignPatterns\Comportamentais\Strategy\Interface;
    interface Frete
    {
        public function calcula(float $ValorPedido): float;
    }