<?php

namespace DesignPatterns\Criacionais\AbstractFactory\BancoDoBrasil;

use DesignPatterns\Criacionais\AbstractFactory\Juros;

class BBJuros implements Juros
{
    public function getJuros(): float
    {
        return 0.03;
    }
}
