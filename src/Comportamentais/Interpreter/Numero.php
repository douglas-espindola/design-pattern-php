<?php

namespace DesignPatterns\Comportamentais\Interpreter;

class Numero implements Expressao
{
    private Digito $esquerda;
    private ?Numero $direita;

    public function __construct(Digito $esquerda, ?Numero $direita = null)
    {
        $this->esquerda = $esquerda;
        $this->direita = $direita;
    }

    public function interpretar(array $contexto): int
    {
        if (is_null($this->direita)) {
            return $this->esquerda->interpretar($contexto);
        }

        return intval(
            $this->esquerda->interpretar($contexto) .
            $this->direita->interpretar($contexto)
        );
    }
}
