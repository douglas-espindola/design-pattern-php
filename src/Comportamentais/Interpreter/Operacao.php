<?php

namespace DesignPatterns\Comportamentais\Interpreter;

abstract class Operacao implements Expressao
{
    protected Expressao $esquerda;
    protected Expressao $direita;

    public function __construct(Expressao $esquerda, Expressao $direita)
    {
        $this->esquerda = $esquerda;
        $this->direita = $direita;
    }

    abstract public function interpretar(array $contexto): int;
}
