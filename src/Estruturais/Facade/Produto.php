<?php

namespace DesignPatterns\Estruturais\Facade;

class Produto
{
    private string $nome;
    private string $descricao;
    private float $valor;

    public function __construct(string $nome, string $descricao, float $valor)
    {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->valor = $valor;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function getValor(): float
    {
        return $this->valor;
    }
}
