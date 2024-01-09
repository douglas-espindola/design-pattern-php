<?php

namespace DesignPatterns\Estruturais\Flyweight;

class Plantacao
{
    private array $arvores;

    public function addArvore(
        int $x,
        int $y,
        string $nome,
        string $cor,
        float $alturaMaxima
    ): void {
        $arvore = new Arvore($x, $y, $nome, $cor, $alturaMaxima);
        $this->arvores[] = $arvore;
    }

    public function retornaArvores(): array
    {
        $arvoresArray = [];
        foreach ($this->arvores as $arvore) {
            $arvoresArray[] = $arvore->retornaArvore();
        }

        return $arvoresArray;
    }
}
