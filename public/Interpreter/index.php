<?php

require_once __DIR__ . '/../../vendor/autoload.php';


use DesignPatterns\Comportamentais\Interpreter\Adicao;
use DesignPatterns\Comportamentais\Interpreter\Digito;
use DesignPatterns\Comportamentais\Interpreter\Divisao;
use DesignPatterns\Comportamentais\Interpreter\Multiplicacao;
use DesignPatterns\Comportamentais\Interpreter\Numero;
use DesignPatterns\Comportamentais\Interpreter\Subtracao;
use DesignPatterns\Comportamentais\Interpreter\Variavel;
use DesignPatterns\Comportamentais\Interpreter\Parser;

require_once __DIR__ . '/../../vendor/autoload.php';

$arvore = new Subtracao(
                new Subtracao(
                    new Adicao(
                        new Numero(new Digito('5')),
                        new Numero(new Digito('9'))
                    ),
                    new Variavel('x')
                ),
                new Divisao(
                    new Subtracao(
                        new Multiplicacao(
                            new Numero(new Digito(2), new Numero(new Digito(0))),
                            new Numero(new Digito(2))
                        ),
                        new Numero(new Digito(1), new Numero(new Digito(0)))
                    ),
                    new Variavel('y')
                )
);

$contexto = ['x' => 2, 'y' => 3];

echo $arvore->interpretar($contexto);

/*
$parser = new Parser('9 5 + x - 20 2 * 10 - y / -');

$arvore = $parser->parse();

$contexto = ['x' => 2, 'y' => 3];

echo $arvore->interpretar($contexto);
*/
