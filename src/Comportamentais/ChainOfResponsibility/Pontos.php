<?php

namespace DesignPatterns\Comportamentais\ChainOfResponsibility;

class Pontos
{
    /**
     * @param $valor
     * @return int
     */
    public  function  calcularPontos($valor):int
    {
         if(($pontos = ((new Pontos70())->calcularPontos($valor)))){
             return $pontos;
         }
         return  0;
    }
}