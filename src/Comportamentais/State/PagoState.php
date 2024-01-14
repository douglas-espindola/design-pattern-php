<?php

    namespace DesignPatterns\Comportamentais\State;
    use State;

    class PagoState implements State
    {
        private Pedido $pedido;
        public function __construct(Pedido $pedido)
        {
            $this->pedido = $pedido;
        }

        public function sucessoAoPagar(): void
        {
            throw new \Exception ('O pedido já foi pago');
        }

        public function cancelar(): void
        {
            $this->pedido->setEstadoAtual($this->pedido->getCancelado());
        }

        public function enviar(): void
        {
            $this->pedido->setEstadoAtual($this->pedido->getEnviado());
        }
    }