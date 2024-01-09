<?php

namespace DesignPatterns\Estruturais\Facade;

class Consumidor
{
    private string $nome;
    private string $cpf;
    private string $email;

    public function __construct(string $nome, string $cpf, string $email)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
