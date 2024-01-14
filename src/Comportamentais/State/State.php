<?php

    namespace DesignPatterns\Comportamentais\State;
    interface State
    {
        public function sucessoAoPagar(): void;

        public function cancelar(): void;

        public function enviar(): void;
    }