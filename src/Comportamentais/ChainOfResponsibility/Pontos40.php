<?php

namespace DesignPatterns\Comportamentais\ChainOfResponsibility;

/**
 * @property ChainInterface $next
 */
class Pontos40 implements ChainInterface
{
    public  function calcularPontos(int $valor):int
    {
        if ($valor >=40){
            return intdiv($valor,  7);
        }
        return $this->setNext(new Pontos20())->calcularPontos($valor);
    }

    public function setNext(ChainInterface $next): ChainInterface
    {
        $this->next = $next;
        return $this->next;
    }
}