<?php

    namespace DesignPatterns\Comportamentais\State;

    class CanceladoState implements State
    {
        private Pedido $pedido;
        public function __construct(Pedido $pedido)
        {
            $this->pedido = $pedido;
        }

        public function sucessoAoPagar(): void
        {
            throw new \Exception ('O pedido está cancelado');
        }

        public function cancelar(): void
        {
            throw new \Exception ('O pedido já está cancelado');
        }

        public function enviar(): void
        {
            throw new \Exception ('O pedido está cancelado');
        }
    }