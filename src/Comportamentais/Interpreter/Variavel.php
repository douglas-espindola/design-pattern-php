<?php

namespace DesignPatterns\Comportamentais\Interpreter;

class Variavel implements Expressao
{
    private string $variavel;

    public function __construct(string $variavel)
    {
        $this->variavel = $variavel;
    }

    private function validarVariavel()
    {
        $alfabeto = [
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
            'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
        ];
        return in_array($this->variavel, $alfabeto);
    }

    public function interpretar(array $contexto): int
    {
        if ($this->validarVariavel() && isset($contexto[$this->variavel])) {
            return $contexto[$this->variavel];
        }

        throw new \Exception('A variável precisa ser uma letra de a-z e estar definida no contexto!');
    }
}
