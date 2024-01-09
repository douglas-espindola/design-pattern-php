<?php

namespace DesignPatterns\Criacionais\AbstractFactory\BancoDoBrasil;

use DesignPatterns\Criacionais\AbstractFactory\Multa;

class BBMulta implements Multa
{
    public function getMulta(): float
    {
        return 0.02;
    }
}
