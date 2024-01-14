<?php

    namespace DesignPatterns\Comportamentais\State;

    class Pedido
    {
        private State $aguardandoPagamento;
        private State $pago;
        private State $cancelado;
        private State $enviado;
        private State $estado_atual;
        public function __construct()
        {
            $this->aguardandoPagamento = new AguardandoPagamentoState($this);
            $this->pago = new PagoState($this);
            $this->cancelado = new CanceladoState($this);
            $this->enviado = new EnviadoState($this);

            $this->estado_atual = $this->aguardandoPagamento;
        }

        public function getPago(): State
        {
            return $this->pago;
        }

        public function getCancelado(): State
        {
            return $this->cancelado;
        }

        public function getEnviado(): State
        {
            return $this->enviado;
        }

        public function realizarPagamento()
        {
            try {
                $this->estado_atual->sucessoAoPagar();
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        }

        public function cancelarPedido()
        {
            try {
                $this->estado_atual->cancelar();
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
        }

        public function despacharPedido()
        {
            try {
                $this->estado_atual->enviar();
            } catch (\Exception $e) {
                echo $e->getMessage();
            }

        }

        public function setEstadoAtual(State $estado)
        {
            $this->estado_atual = $estado;
        }
    }