<?php

namespace DesignPatterns\Estruturais\Proxy;

class PessoaFisicaReceitaFederal
{
    private string $nome;
    private string $cpf;
    private string $idade;
    private bool $cpfAtivo;

    /**
     * PessoaFisicaReceitaFederal constructor.
     * @param string $cpf
     */
    public function __construct(string $cpf)
    {
        $this->cpf = $cpf;
        $this->nome = 'João da Silva';
        $this->idade = 25;
        $this->cpfAtivo = true;

        sleep(5);
        echo 'PessoaFisicaReceitaFederal criada com sucesso <br>';
    }

    public function getNome(): string
    {
        sleep(2);
        return $this->nome;
    }

    /**
     * @return int
     */
    public function getIdade(): int
    {
        sleep(2);
        return $this->idade;
    }

    /**
     * @return bool
     */
    public function CPFAtivo(): bool
    {
        sleep(3);
        return $this->cpfAtivo;
    }
}
