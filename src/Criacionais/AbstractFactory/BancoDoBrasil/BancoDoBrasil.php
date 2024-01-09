<?php

namespace DesignPatterns\Criacionais\AbstractFactory\BancoDoBrasil;

use DesignPatterns\Criacionais\AbstractFactory\Banco;
use DesignPatterns\Criacionais\AbstractFactory\Boleto;

class BancoDoBrasil extends Banco
{
    protected function criarBoleto(int $vencimentoBoleto, float $valor): Boleto
    {
        return new BancoDoBrasilBoleto10Dias($valor);
    }
}
