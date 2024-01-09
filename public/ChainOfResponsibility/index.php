<?php

use DesignPatterns\Comportamentais\ChainOfResponsibility\CalculadoraDePontos;
use DesignPatterns\Comportamentais\ChainOfResponsibility\Pedido;

require_once __DIR__ . '/../../vendor/autoload.php';

$pedido = new Pedido();
$calculadoraDePontos = new CalculadoraDePontos();

$pedido->setValor(21);

echo 'Dia 15: ' . $calculadoraDePontos->calcularPontosDoPedido($pedido, 15) . " Pontos<br/>";
echo 'Dia 16: ' . $calculadoraDePontos->calcularPontosDoPedido($pedido, 16) . " Pontos<br/>";

echo "---------------------------<br>";

$pedido->setValor(100);

echo 'Dia 15: ' . $calculadoraDePontos->calcularPontosDoPedido($pedido, 15) . " Pontos<br/>";
echo 'Dia 16: ' . $calculadoraDePontos->calcularPontosDoPedido($pedido, 16) . " Pontos<br/>";