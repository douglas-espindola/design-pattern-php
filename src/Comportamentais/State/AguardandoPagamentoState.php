<?php

    namespace DesignPatterns\Comportamentais\State;

    class AguardandoPagamentoState implements State
    {
        private Pedido $pedido;

        public function __construct(Pedido $pedido)
        {
            $this->pedido = $pedido;
        }

        public function sucessoAoPagar(): void
        {
            $this->pedido->setEstadoAtual($this->pedido->getPago());
        }

        public function cancelar(): void
        {
            $this->pedido->setEstadoAtual($this->pedido->getCancelado());
        }

        public function enviar(): void
        {
            throw new \Exception('O pedido ainda não foi pago');
        }
    }