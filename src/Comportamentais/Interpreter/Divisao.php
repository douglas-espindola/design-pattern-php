<?php

namespace DesignPatterns\Comportamentais\Interpreter;

class Divisao extends Operacao
{
    public function interpretar(array $contexto): int
    {
        return intval($this->esquerda->interpretar($contexto) / $this->direita->interpretar($contexto));
    }
}
