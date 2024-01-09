<?php

namespace DesignPatterns\Comportamentais\Interpreter;

class Digito implements Expressao
{
    private string $digito;

    public function __construct(string $digito)
    {
        $this->digito = $digito;
    }

    private function validarDigito()
    {
        $digitos = [
            '0', '1', '2', '3', '4',
            '5', '6', '7', '8', '9'
        ];

        return in_array($this->digito, $digitos);
    }

    public function interpretar(array $contexto): int
    {
        if ($this->validarDigito()) {
            return intval($this->digito);
        }

        throw new \Exception('Todo dígito deve ser um inteiro');
    }
}
