<?php

    namespace DesignPatterns\Comportamentais\State;

    class EnviadoState implements State
    {
        private Pedido $pedido;
        public function __construct(Pedido $pedido)
        {
            $this->pedido = $pedido;
        }

        public function sucessoAoPagar(): void
        {
            throw new \Exception ('O pedido já foi despachado');
        }

        public function cancelar(): void
        {
            throw new \Exception ('O pedido não pode ser cancelado' );
        }

        public function enviar(): void
        {
            throw new \Exception ('O pedido já foi despachado');
        }
    }