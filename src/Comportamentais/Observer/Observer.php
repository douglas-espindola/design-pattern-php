<?php

    namespace DesignPatterns\Comportamentais\Observer;

    interface Observer
    {
        public function update(string $mensagem): void;
        public function getNome(): string;
        public function getEmail(): string;
    }