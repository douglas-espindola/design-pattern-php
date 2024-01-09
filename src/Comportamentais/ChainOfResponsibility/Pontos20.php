<?php

namespace DesignPatterns\Comportamentais\ChainOfResponsibility;

/**
 * @property ChainInterface $next
 */
class Pontos20 implements \DesignPatterns\Comportamentais\ChainOfResponsibility\ChainInterface
{

    /**
     * @param int $valor
     * @return int
     */
    public  function calcularPontos(int $valor):?int
    {
        if ($valor >=20){
            return intdiv($valor, 20);
        }
        return null;
    }

    /**
     * @param ChainInterface $next
     * @return ChainInterface
     */
    public function setNext(ChainInterface $next): ChainInterface
    {
        $this->next = $next;
        return $this->next;
    }

}