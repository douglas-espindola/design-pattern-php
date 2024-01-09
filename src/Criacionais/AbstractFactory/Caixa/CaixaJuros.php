<?php

namespace DesignPatterns\Criacionais\AbstractFactory\Caixa;

use DesignPatterns\Criacionais\AbstractFactory\Juros;

class CaixaJuros implements Juros
{
    public function getJuros(): float
    {
        return 0.02;
    }
}
