<?php

namespace DesignPatterns\Comportamentais\Interpreter;

interface Expressao
{
    public function interpretar(array $contexto): int;
}
