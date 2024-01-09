<?php

namespace DesignPatterns\Criacionais\AbstractFactory\Caixa;

use DesignPatterns\Criacionais\AbstractFactory\Boleto;

class BancoCaixaBoleto10Dias extends Boleto
{
    public function __construct(float $valor)
    {
        parent::__construct($valor);
        $this->juros = 0.02;
        $this->desconto = 0.1;
        $this->multa = 0.05;
    }
}