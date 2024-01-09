<?php

namespace DesignPatterns\Criacionais\AbstractFactory\Caixa;

use DesignPatterns\Criacionais\AbstractFactory\Multa;

class CaixaMulta implements Multa
{
    public function getMulta(): float
    {
        return 0.05;
    }
}
