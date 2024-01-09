<?php

namespace DesignPatterns\Comportamentais\Interpreter;

class Multiplicacao extends Operacao
{
    public function interpretar(array $contexto): int
    {
        return $this->esquerda->interpretar($contexto) * $this->direita->interpretar($contexto);
    }
}
