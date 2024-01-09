<?php

namespace DesignPatterns\Estruturais\Flyweight;

class Arvore
{
    private int $x;
    private int $y;
    private string $nome;
    private string $cor;
    private string $alturaMaxima;

    public function __construct(int $x, int $y, string $nome, string $cor, float $alturaMaxima)
    {
        $this->x = $x;
        $this->y = $y;
        $this->nome = $nome;
        $this->cor = $cor;
        $this->alturaMaxima = $alturaMaxima;
    }

    public function retornaArvore(): array
    {
        return [
            'x' => $this->x,
            'y' => $this->y,
            'nome' => $this->nome,
            'cor' => $this->cor,
            'alturaMaxima' => $this->alturaMaxima
        ];
    }
}
