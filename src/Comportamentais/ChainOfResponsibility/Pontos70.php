<?php

namespace DesignPatterns\Comportamentais\ChainOfResponsibility;

use DesignPatterns\Comportamentais\ChainOfResponsibility\ChainInterface;

/**
 * @property \DesignPatterns\Comportamentais\ChainOfResponsibility\ChainInterface $next
 */
class Pontos70 implements ChainInterface
{
    public  function calcularPontos(int $valor):int
    {
        if ($valor >=70){
            return intdiv($valor, 5);
        }
        return $this->setNext(new Pontos40())->calcularPontos($valor);
    }

    public function setNext(ChainInterface $next): ChainInterface
    {
        $this->next = $next;
        return $this->next;
    }
}