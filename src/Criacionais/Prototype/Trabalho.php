<?php

namespace DesignPatterns\Criacionais\Prototype;

class Trabalho
{
    private string $nome;
    private string $autor;
    private string $tipo;
    
    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getAutor(): string
    {
        return $this->autor;
    }

    public function setAutor(string $autor): void
    {
        $this->autor = $autor;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): void
    {
        $this->tipo = $tipo;
    }

    //Formata o objeto quando impresso.
    public function __toString()
    {
        $saida['nome'] = $this->getNome();
        $saida['autor'] = $this->getAutor();
        $saida['tipo'] = $this->getTipo();

        return json_encode($saida);
    }
}
