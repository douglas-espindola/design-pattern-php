<?php

    namespace DesignPatterns\Comportamentais\TemplateMethod;

    abstract class Pagamento
    {
        private float $valor;
        private Gateway $gateway;

        public function __construct($valor, Gateway $gateway)
        {
            $this->valor   = $valor;
            $this->gateway = $gateway;
        }

        public function getValor(): float
        {
            return $this->valor;
        }

        public function setValor(float $valor): void
        {
            $this->valor = $valor;
        }

        public function calcularTaxa(): float
        {
            return 0;
        }

        abstract public function calcularDesconto(): float;

        public function realizaCobranca(): bool
        {
            $valorFinal = $this->valor + $this->calcularTaxa() - $this->calcularDesconto();
            return $this->gateway->cobrar($valorFinal);
        }
    }