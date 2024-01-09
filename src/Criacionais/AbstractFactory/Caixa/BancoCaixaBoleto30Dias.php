<?php

namespace DesignPatterns\Criacionais\AbstractFactory\Caixa;

use DesignPatterns\Criacionais\AbstractFactory\Boleto;

class BancoCaixaBoleto30Dias extends Boleto
{
    public function __construct(float $valor)
    {
        parent::__construct($valor);
        $this->juros = 0.05;
        $this->desconto = 0.05;
        $this->multa = 0.1;
    }
}