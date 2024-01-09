<?php

namespace DesignPatterns\Criacionais\AbstractFactory\Caixa;

use DesignPatterns\Criacionais\AbstractFactory\Boleto;

class BancoCaixaBoleto60Dias extends Boleto
{
    public function __construct(float $valor)
    {
        parent::__construct($valor);
        $this->juros = 0.10;
        $this->desconto = 0;
        $this->multa = 0.2;
    }
}