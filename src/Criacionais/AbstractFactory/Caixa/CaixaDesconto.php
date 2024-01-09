<?php

namespace DesignPatterns\Criacionais\AbstractFactory\Caixa;

use DesignPatterns\Criacionais\AbstractFactory\Desconto;

class CaixaDesconto implements Desconto
{
    public function getDesconto(): float
    {
        return 0.1;
    }
}
