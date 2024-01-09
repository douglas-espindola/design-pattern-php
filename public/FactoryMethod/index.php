<?php

use DesignPatterns\Criacionais\FactoryMethod\BancoCaixa;

require_once __DIR__ . '/../../vendor/autoload.php';

$banco = new BancoCaixa();

//Boleto com 10 dias para o vencimento.
$banco ->gerarBoleto(10, 100);

//Boleto com 10 dias para o vencimento.
$banco->gerarBoleto(30, 100);

//Boleto com 10 dias para o vencimento.
$banco->gerarBoleto(60, 100);
