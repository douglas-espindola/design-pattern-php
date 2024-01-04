<?php

    namespace DesignPatterns\Comportamentais\Strategy;

    use DesignPatterns\Comportamentais\Strategy\Strategies\AbstractPedido;

    class PedidoEletronicos extends AbstractPedido
    {
        private string $nomeSetor;

        public function __construct()
        {
            $this->nomeSetor = 'Eletrônicos';
        }

        public function getNomeSetor(): string
        {
            return $this->nomeSetor;
        }

        public function setNomeSetor(string $nomeSetor): void
        {
            $this->nomeSetor = $nomeSetor;
        }
    }