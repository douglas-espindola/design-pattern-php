<?php

    namespace DesignPatterns\Comportamentais\State;

    class Pedido
    {
        const AGUARDANDO_PAGAMENTO = 1;
        const PAGO      = 2;
        const CANCELADO = 3;
        const ENVIADO   = 4;

        private int $estado_atual;

        public function __construct()
        {
            $this->estado_atual = self::AGUARDANDO_PAGAMENTO;
        }

        public function sucessoAoPagar() {
            if($this->estado_atual == self::AGUARDANDO_PAGAMENTO){
                $this->estado_atual = self::PAGO;
            } else {
                throw new \Exception("Não é possível mudar o estado");
            }
        }

        public function cancelarPedido()
        {
            if($this->estado_atual == self::AGUARDANDO_PAGAMENTO){
                $this->estado_atual = self::CANCELADO;
            }elseif($this->estado_atual == self::PAGO){
                $this->estado_atual = self::CANCELADO;
            }
            else {
                throw new \Exception("O pedido não pode ser CANCELADO");
            }
        }

        public function despacharPedido()
        {
            if($this->estado_atual == self::PAGO){
                $this->estado_atual = self::ENVIADO;
            } else {
                throw new \Exception("O pedido não pode ser ENVIADO");
            }
        }
    }