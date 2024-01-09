<?php

namespace DesignPatterns\Criacionais\AbstractFactory\BancoDoBrasil;

use DesignPatterns\Criacionais\AbstractFactory\Desconto;

class BBDesconto implements Desconto
{
    public function getDesconto(): float
    {
        return 0.05;
    }
}
