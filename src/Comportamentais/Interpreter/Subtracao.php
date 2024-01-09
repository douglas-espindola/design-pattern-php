<?php

namespace DesignPatterns\Comportamentais\Interpreter;

class Subtracao extends Operacao
{
    public function interpretar(array $contexto): int
    {
        return $this->esquerda->interpretar($contexto) - $this->direita->interpretar($contexto);
    }
}
