<?php

namespace DesignPatterns\Estruturais\Composite;

class Arquivo
{
    public string $nome;
    public string $caminho;

    public function __construct(string $nome, string $caminho)
    {
        $this->nome = $nome;
        $this->caminho = $caminho;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCaminho(): string
    {
        return $this->caminho;
    }

    public function exibir(): void
    {
        echo "  - " . $this->getNome() . ' - [' . $this->getCaminho() . '] </br>';
    }
}
