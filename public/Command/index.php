<?php

use DesignPatterns\Comportamentais\Command\Fabricante\ArCondicionado;
use DesignPatterns\Comportamentais\Command\Fabricante\Lampada;

require_once __DIR__ . '/../../vendor/autoload.php';

$lampadaSala = new Lampada('Lampada da Sala', false);

$lampadaSala->ligar();
$lampadaSala->imprimeObjeto();
$lampadaSala->desligar();
$lampadaSala->imprimeObjeto();

$lampadaQuarto = new Lampada('Lampada do Quarto', false);

$lampadaQuarto->ligar();
$lampadaQuarto->imprimeObjeto();
$lampadaQuarto->desligar();
$lampadaQuarto->imprimeObjeto();

$arCondicionado = new ArCondicionado('Ar-condicionado', false, 26);

$arCondicionado->ligar();
$arCondicionado->imprimeObjeto();
$arCondicionado->setTemperatura(25);
$arCondicionado->imprimeObjeto();
$arCondicionado->desligar();
$arCondicionado->imprimeObjeto();
