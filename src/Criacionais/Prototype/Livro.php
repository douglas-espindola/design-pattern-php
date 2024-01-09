<?php

namespace DesignPatterns\Criacionais\Prototype;

class Livro
{
    private string $nome;
    private string $autor;
    private int $numeroPaginas;
    
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

    public function getNumeroPaginas(): int
    {
        return $this->numeroPaginas;
    }

    public function setNumeroPaginas(int $numeroPaginas): void
    {
        $this->numeroPaginas = $numeroPaginas;
    }

    //Formata o objeto quando impresso.
    public function __toString()
    {
        $saida['nome'] = $this->getNome();
        $saida['autor'] = $this->getAutor();
        $saida['numeroPaginas'] = $this->getNumeroPaginas();

        return json_encode($saida);
    }
}
