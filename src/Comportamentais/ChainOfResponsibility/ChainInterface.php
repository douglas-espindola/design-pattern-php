<?php

namespace DesignPatterns\Comportamentais\ChainOfResponsibility;

interface ChainInterface
{
    /**
     * @param ChainInterface $next
     * @return ChainInterface
     */
    public  function setNext(ChainInterface $next): ChainInterface;
}