<?php

namespace DesignPatterns\Estruturais\Proxy;

use DesignPatterns\Estruturais\Proxy\PessoaFisicaReceitaFederal;

class Usuario
{
    private string $nome;
    private string $cpf;
    private int $idade;
    private PessoaFisicaReceitaFederal $pessoaFisica;

    public function __construct(string $nome, string $cpf, int $idade)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->idade = $idade;
        $this->pessoaFisica = new PessoaFisicaReceitaFederal($cpf);
    }

    public function validarNome(): bool
    {
        return $this->nome === $this->pessoaFisica->getNome();
    }

    public function VerificaCPFAtivo(): bool
    {
        return $this->pessoaFisica->CPFAtivo();
    }

    public function verificarMaioridade(): bool
    {
        return $this->idade >= 18 && $this->idade === $this->pessoaFisica->getIdade();
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }
}
