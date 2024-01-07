<?php

    namespace DesignPatterns\Comportamentais\Observer;

    class Parceiro implements Observer
    {
        protected string $nome;
        protected string $email;
        protected Subject $subject;

        public function __construct(string $nome, string $email, Subject $subject)
        {
            $this->nome    = $nome;
            $this->email   = $email;
            $this->subject = $subject;
            $this->subject->registerObserver($this);
        }
        public function update(string $mensagem): void
        {
            Email::enviarEmail($this, $mensagem);
        }

        public function getNome(): string
        {
            return $this->nome;
        }

        public function getEmail(): string
        {
            return $this->email;
        }
    }